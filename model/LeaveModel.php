<?php
class LeaveModel {
	
	public $con;
//    public $id = $_GET['id'];
    const LEAVE_PENDING = 1;
    function __construct() {
        $mysql =  new MysqlCon();
		$this->con = $mysql->con;
    }	
	
	public function IfExist($params = array())	{
		$query = 'SELECT * from `employee_has_credentials` where employee_id = ?';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	

		return $return;
	}
    
    public function getLeaveHistory($params = array()){
		$query = 'SELECT * from `employee_has_leaves` where employee_id = ?';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	

		return $return;
	}
    
    public function getAllLeavesToday($params = array()){
//		$query = 'SELECT * FROM leaves as l WHERE date(l.application_date) = date(now() - interval 1 day)';
		$query = 'SELECT * FROM employee_has_leaves';
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	

		return $return; 
	}
    
    public function applyLeave($leaveType,$fromDate,$toDate,$reason,$application_date,$employee_id){
         $query = 'INSERT INTO employee_has_leaves(employee_id,from_date,to_date,status,application_date,leave_type,reason)
						VALUES(:employee_id,:fromDate,:toDate,3,:application_date,:leaveType,:reason)';
		$result = $this->con->prepare($query);
        		$result->execute(array('leaveType'=>$leaveType,'fromDate'=>$fromDate,'toDate'=>$toDate,'reason'=>$reason,'application_date'=>$application_date,'employee_id'=>$employee_id,));
		
		if($result){
			return true; 
		}else{
			return false;
		}
	}
    
    public function updateLeave($id,$seletedLeave){
        $query = 'UPDATE employee_has_leave_details SET available_leave = '.$seletedLeave.' WHERE employee_id ='.$id.'';
        $result = $this->con->prepare($query);
        $result->execute(array($id,$seletedLeave));
        
//        Dev::pvx($result);

        if($result){
            return true; 
        }else{
            return false;
        }
    }
    
    public function getAllAttendanceById($params = array()){
        $query = 'SELECT count(*) as availableleave from `employee_has_attendance` as eha
                    Left join employees as e on e.id = eha.employee_id
                    WHERE eha.employee_id = ?';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;
    }
    
    public function getAvailableLeave($params = array()){
        $query = 'SELECT ehld.available_leave
                FROM employee_has_leave_details as ehld
                WHERE ehld.employee_id = ?';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;
    }
    
    	
	
}
