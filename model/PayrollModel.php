<?php
class PayrollModel {

    public $con;

    function __construct() {
        $mysql =  new MysqlCon();
        $this->con = $mysql->con;
    }



    public function getAllPayroll($params = array())
    {
        $query = 'SELECT *,e.id as employee_id,ep.id as payroll_id
                    from `employee_has_payrolls` as ep
                    LEFT JOIN `employees` as e on e.id = ep.employee_id
                    WHERE ep.employee_id = ?


				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;
    }
    public function getAllAttendanceToday()
    {
        $query = 'select * from employee_has_attendance 
				where DATE_FORMAT(time_in, "%Y-%m-%d")=CURDATE();
				';

        $params['start']=$start;
        $params['end']=$end;
        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;
    }
    public function getAllAttendanceWithDate($start,$end)
    {
        $query = 'select * from employee_has_attendance 
				 where time_in between "'.$start.'" and "'.$end.'";
				';

        $params['start']=$start;
        $params['end']=$end;
        $result = $this->con->prepare($query);
        // $result->execute(array($params['start'],$params['end']));
        $result->execute();

        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;
    }
    public function updateFromLocal($params)
    {
        foreach($params as $value){
            $query='Select * from employee_has_attendance where id = ?';
            $result = $this->con->prepare($query);
            $result->execute(array($value['id']));
            $return = $result->fetch(PDO::FETCH_ASSOC);	

            if(empty($return)){

                $query='Insert Into employee_has_attendance(id,employee_id,time_in,time_out,log_status) 
					values(:id,:employee_id,:time_in,:time_out,:log_status)';
                $result = $this->con->prepare($query);
                $result->execute($value);
            }
        }

    }
    public function generatePayroll($params)
    {
        include 'EmployeeModel.php';

        $employeeModel = new EmployeeModel;

        $salaryParams = array();
        $salaryParams = self::salaryComputation($params);


        $query = 'Insert Into employee_has_payrolls(employee_id,from_date,to_date,income,tax,sss,phil_health,pag_ibig,net_income,over_time,late) 
						values(:employee_id,:from_date,:to_date,:income,:tax,:sss,:phil_health,:pag_ibig,:net_income,:over_time,:late)';
        $result = $this->con->prepare($query);
        $result->execute($salaryParams);

        if($result){
            return 1;//save
        }else {
            return 2;//not save
        }






    }


    public function salaryComputation($params)
    {
        $salary =0;
        $computedTax = 0;
        $halfSalary = 0;
        $totalNet = 0;
        $sss = 0;
        $phil_health =0;
        $pag_ibig = 0;
        $OT = 0;
        $rate = 0;
        $totalOT = 0;
        $from = null;
        $to = null;
        $totalDeductionTime =0;


        if(isset($params['from_date']) && isset($params['to_date'])){
            $from = $params['from_date'];
            $to = $params['to_date'];

            //Declare new_params
            $new_params['from_date']=$params['from_date'];
            $new_params['to_date']=$params['to_date'];
            $new_params['employee_id']=$params['employee_id'];
        }

        if(isset($params['salary'])){

            $salary = $params['salary'];
            $halfSalary = $salary/2;
            $sss = $params['sss']/2;
            $phil_health =$params['phil_health']/2;
            $pag_ibig = $params['pag_ibig']/2;
            $OT = $params['over_time'];
            $rate = $params['rate'];

            //Declare new_params
            $new_params['sss']=$params['sss']/2;
            $new_params['phil_health']=$params['phil_health']/2;
            $new_params['pag_ibig']=$params['pag_ibig']/2;
            $new_params['over_time']=$params['over_time'];
        }
        //first times with 12 months
        //then subtract to 250000
        $computedTax =($salary*12)-250000;

        if($computedTax > 0){
            //then divide with 12 months
            //then divide with 22 for the standard days of work a month
            $computedTax = ($computedTax/12)/22;
        }else{
            $computedTax = 0;
        }

        $new_params['tax']=$computedTax;

        $workingDays = self::workingDays($from,$to);
        $attendances = self::getAttendanceComputaion($from,$to);
        $leaveDays = self::getLeaveDays($from,$to);
        $totalComputedTime = self::computeTimeDeduction($attendances,$workingDays,$leaveDays,$params['employee_id']);


        $new_params['income'] = $halfSalary;
        $new_params['late'] = $totalComputedTime;


        //deduct all 
        $totalNet=(((($halfSalary - $sss)-$phil_health)-$pag_ibig)-$computedTax);




        if($OT != 0){
            $multiplier = $rate * 1.25;
            $totalOT = $multiplier * $OT;
        }

        if($totalComputedTime > 0){
            $totalDeductionTime = $rate * $totalComputedTime;
        }

        $totalNet +=$totalOT;

        $totalNet-=$totalDeductionTime;

        if($totalNet < 0){
            $totalNet = 0;
        }

        $new_params['net_income'] = $totalNet;


        return $new_params;

    }


    public function getAttendanceComputaion($from, $to)
    {
        $query = 'SELECT 
				*

				from `employee_has_attendance` 
				Where time_in BETWEEN "'.$from.'" and "'.$to.'" + INTERVAL 1 DAY
				';

        $result = $this->con->prepare($query);
        $result->execute();
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

        return $return;
    }

    public function getLeaveDays($from, $to)
    {
        $query = 'SELECT 
				sum(days) as totalDays

				from `employee_has_leaves` 
				Where from_date BETWEEN "?" and "?" + INTERVAL 1 DAY
				';

        $result = $this->con->prepare($query);
        $result->execute(array($from,$to));
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

        if(isset($return['totalDays'])){
            return $return['totalDays'];
        }else{
            return 0;
        }

    }

    public function getAllEmployeeLeaves($id)
    {
        $query = 'SELECT 
				id,
				anual_leave,
				used_anual_leave
				from `employee_has_leave_details` 
				Where employee_id=?
				and anual_leave >0
				';

        $result = $this->con->prepare($query);
        $result->execute(array($id));
        $return = $result->fetch(PDO::FETCH_ASSOC);

        if(isset($return['anual_leave']) && isset($return['used_anual_leave'])){
            if($return['anual_leave'] > $return['used_anual_leave']){
                return array('id'=>$return['id'],'total'=>$return['anual_leave']-$return['used_anual_leave']);
            }else{
                return array('id'=>$return['id'],'total'=>$return['used_anual_leave']-$return['anual_leave']);
            }

        }else{
            return 0;
        }
    }

    public function updateLeaveDetails($params)
    {
        $query = 'update
				`employee_has_leave_details` 
				set anual_leave=:annual_leave,
				used_anual_leave =:used_anual_leave
				Where id =:id
				';

        $result = $this->con->prepare($query);
        $result->execute($params);


    }
    public function computeTimeDeduction($params,$workingDays,$leaveDays,$id)
    {
        $hourlyLate = 0;
        $hourlyUnderTime = 0;
        $totalDaysAttendance = count($params);
        if($totalDaysAttendance < $workingDays){
            $totalDays = $workingDays - $totalDaysAttendance;



            if($totalDays > 0){
                $totalLeaves = self::getAllEmployeeLeaves($id);
                if(isset($totalLeaves['total']) && $totalLeaves['id']){
                    if($totalLeaves['total'] > $totalDays){

                        $newParams['id']=$totalLeaves['id'];
                        $newParams['used_anual_leave']=$totalDays;
                        $newParams['annual_leave']=$totalLeaves['total']-$totalDays;
                        self::updateLeaveDetails($newParams);

                        $totalDays=0;
                    }else{
                        $newParams['id']=$totalLeaves['id'];
                        $newParams['used_anual_leave']=$totalLeaves['total'];
                        $newParams['annual_leave']=0;
                        self::updateLeaveDetails($newParams);

                        $totalDays-=$totalLeaves['total'];
                    }
                }

            }

            $hourlyLate+=$totalDays*8;
        }


        foreach($params as $data){

            $date = strtotime($data['time_in']);
            $hour = date('H', $date);
            $min = date('i', $date);
            $diffHour =0;
            $diffMin =0;
            $regularTime = 7;
            $regularMin = 30;

            $outDate = strtotime($data['time_out']);
            $outRegularTime = 16;
            $outRegularMin = 30;
            $hourOut = date('H', $outDate);
            $minOut = date('i', $outDate);


            //computation of late
            if($regularTime < (int)$hour){

                $diffHour = (int)$hour - $regularTime;

                if((int)$min < $regularMin){

                    $hourlyLate-=0.5;
                }else{
                    $hourlyLate+=0.5;
                }

                $hourlyLate+=$diffHour;

            }else if((int)$min > $regularMin && $regularTime == (int)$hour){

                $hourlyLate+=0.5;
            }

            //computation of undertime
            if($outRegularTime > (int)$hourOut){
                $diff= $outRegularTime-(int)$hourOut;
                if((int)$minOut < $outRegularMin ){
                    $hourlyUnderTime+=0.5;

                }

                $hourlyUnderTime+=$diff;


            }

            // 			else{
            // 				$hourlyUnderTime+=$outRegularTime-(int)$hourOut;
            // 			}



        }


        if($leaveDays > 0){
            $leaveDays*=8;
            $hourlyLate-=$leaveDays;
        }

        return $hourlyLate+$hourlyUnderTime;

    }

    public function workingDays($from, $to) {
        $workingDays = [1, 2, 3, 4, 5]; 
        //$holidayDays = ['*-12-25', '*-01-01', '2013-12-23']; # variable and fixed holidays

        $from = new DateTime($from);
        $to = new DateTime($to);
        //$to->modify('+1 day');
        $interval = new DateInterval('P1D');
        $periods = new DatePeriod($from, $interval, $to);

        $days = 0;
        foreach ($periods as $period) {
            if (!in_array($period->format('N'), $workingDays)) continue;
            //if (in_array($period->format('Y-m-d'), $holidayDays)) continue;
            //if (in_array($period->format('*-m-d'), $holidayDays)) continue;
            $days++;
        }
        return $days;
    }


    public function getPayrollDetails($params = array())
    {

        $query = 'select
			ep.*,
			sg.*,
			cp.position,
			c.name as department,
			es.rate,
			concat(e.first_name," ",e.middle_name," ",e.last_name) as fullname
			from employee_has_payrolls as ep
			LEFT JOIN employees as e on e.id = ep.employee_id
			LEFT JOIN employee_has_employment_details as ed on e.id = ep.employee_id
            Left join category_has_position as cp on cp.id = ed.position_id
            Left Join categories as c on c.id = ed.category_id
			LEFT JOIN employee_has_salary as es on e.id = es.employee_id
			LEFT Join salary_has_grades as sg on sg.id = es.salary_grade_id 
			where ep.id = ? ';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;


    }
}
