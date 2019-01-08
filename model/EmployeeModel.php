<?php
class EmployeeModel {
	
	public $con;
//    public $id = $_GET['id'];
    const STATUS_PENDING = 3;
    
    function __construct() {
        $mysql =  new MysqlCon();
		$this->con = $mysql->con;
    }
	
	
	public function getAllEmployeesForLocal()
	{
		$query = 'SELECT 
				*
				from `employees`
			where status = 1';
		$newParams =array();
		
	
		$result = $this->con->prepare($query);
		$result->execute();
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	

		return $return;
		
	}
	public function IfExist($params = array())
	{
		$query = 'SELECT * from `employee_has_credentials` where employee_id = ?';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	

		return $return;
	}
    
	
	public function getEmployeeDetailss($params = array())
	{
		$query = 'SELECT * from `employee_has_credentials` where employee_id = ?';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	

		return $return;
        
		
		
	}
	
	public function registration($params){
        
//        $password = $_POST['password'];
        
//            password_hash($password, PASSWORD_DEFAULT);
		$query = 'Insert Into employee_has_credentials(username,password,name,email,status,employee_id) 
                    values(:username,:password,:name,:email,'.self::STATUS_PENDING.',:employee_id)';
		$result = $this->con->prepare($query);
		$result->execute($params);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}
    
//	public function updateEmployees($params)
//	{
//		$query = 'Update employees 
//				set 
//				first_name=:first_name, 
//				middle_name=:middle_name,
//				last_name=:last_name,
//				position=:position,
//				email_address=:email_address,
//				phone_number=:phone_number,
//				address=:address,
//				date_hired=:date_hired 
//				Where id=:id';
//		$result = $this->con->prepare($query);
//		$result->execute($params);
//		
//		if($result){
//			return true;
//		}else{
//			return false;
//		}
//	}	
    
    
    // employee pds
    public function getAllEmployees($params = array())
    {
        $query = 'SELECT 
				e.*,
				eed.status as employment_status,
				eed.id as employment_id
				from `employees` as e
				LEFT JOIN employee_has_employment_details as eed on eed.employee_id = e.id
			where e.status = '.self::STATUS_ACTIVE;
        $newParams =array();


        $result = $this->con->prepare($query);
        $result->execute();
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getAllEmployeeNames()
    {
        $query = 'SELECT 
				id,
				first_name

				from `employees` 
				where status = '.self::STATUS_ACTIVE;

        $result = $this->con->prepare($query);
        $result->execute();
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	
        return $return;

    }
    public function getEmployeeBasicDetails($params = array())
    {
        $query = 'SELECT *,ehpi.id as personal_id
				from `employees` as e
				Left Join employee_has_personal_informations as ehpi on ehpi.employee_id = e.id 

				where e.id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeAddress($params = array())
    {
        $query = 'SELECT *
				from `employee_has_address` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeSpouse($params = array())
    {
        $query = 'SELECT *
				from `employee_has_spouse` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeParents($params = array())
    {
        $query = 'SELECT *
				from `employee_has_parents` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeChildren($params = array())
    {
        $query = 'SELECT *
				from `employee_has_childrens` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeEducation($params = array())
    {
        $query = 'SELECT *
				from `employee_has_educations` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeCivilService($params = array())
    {
        $query = 'SELECT *
				from `employee_has_civil_service_eligibility` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeWorkExperience($params = array())
    {
        $query = 'SELECT *
				from `employee_has_work_experiences` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeVoluntaryExperience($params = array())
    {
        $query = 'SELECT *
				from `employee_has_voluntary_works` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeLearningDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_training_programs` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeotherInformationDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_other_informations` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeQuestionDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_answers` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeGovernmentDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_government_ids` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeEmploymentDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_employment_details` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }

    public function getEmployeeSalaryDisplayDetails($params = array())
    {
        $query = 'SELECT *
				from `employee_has_salary` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeReferences($params = array())
    {
        $query = 'SELECT *
				from `employee_has_references` 
				where employee_id = ?
				';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }

    public function getEmployeeDetails($params = array())
    {
        $query = 'SELECT *,
				es.id as salary_id,
				ed.id as details_id,
				eed.id as employment_id
				from `employees` as e
				LEFT JOIN employee_has_salary as es on es.employee_id = e.id
				LEFT JOIN employee_has_details as ed on ed.employee_id = e.id
				LEFT JOIN employee_has_employment_details as eed on eed.employee_id = e.id
				where e.id = ? ';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function getEmployeeSalaryDetails($params = array())
    {
        $query = 'SELECT e.id,
				e.first_name,
				es.id as salary_id,
				es.*
				from `employees` as e
				LEFT JOIN employee_has_salary as es on es.employee_id = e.id
				where e.id = ? ';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;

    }
    public function addEmployee($data)
    {
        $checkerQuery = 'select id from employees limit 1'; 
        $checked = $this->con->prepare($checkerQuery);
        $checked->execute();
        $checkerRes = $checked->fetch(PDO::FETCH_ASSOC);	


        $basic=array();
        $personalInformation=array();
        $spouse = array();
        $parents = array();
        $children = array();
        $education = array();
        $civil_service = array();
        $work_experience = array();
        $voluntary = array();
        $learning = array();
        $other_info = array();
        $survey = array();
        $references = array();
        $government_id = array();
        $employment = array();
        $salary = array();
        $address = array();
        $ctr = 1;
        $ctr2 = 1;
        $checkBasic = array(
            'first_name',
            'middle_name',
            'last_name',
            'email_address',
            'extension'

        );
        $checkSalary = array(
            'salary',
            'sss',
            'phil_health',
            'pag_ibig',
            'rate',

        );

        $checkPersonal = array(
            'dual_citizen',
            'dual_citizen_country',
            'birthday',
            'citizenship',
            'sex',
            'civil_status',
            'height',
            'weight',
            'place_of_birth',
            'telephone_no',
            'blood_type',
            'gsis_no',
            'pag_ibig_no',
            'phil_health_no',
            'sss_no',
            'tin_no',
            'agency_employee_no',
            'mobile_no',

        );
        $checkEmployment = array(
            'date_hired',
            'position',
            'department'

        );
        $checkAddress = array(
            'house_no',
            'street',
            'subdivision',
            'barangay',
            'municipality',
            'province',
            'zip_code',
            'house_type',

        );

        foreach($data as $key => $value){
            if(in_array($key,$checkEmployment)){
                $employment[$key] = $value;
            }else if(in_array($key,$checkSalary)){
                $salary[$key] = $value;
            }else if(in_array($key,$checkBasic)){
                $basic[$key] = $value;
            }else if(in_array($key,$checkAddress)){
                foreach($value as $numKey => $data){

                    $address[$numKey][$key]=$data;
                }
            }else if(in_array($key,$checkPersonal)){
                $personalInformation[$key] = $value;
            }else if(strpos($key,"educ_") !== false){

                $newKey = str_replace("educ_","",$key);
                foreach($value as $numKey => $data){
                    $education[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"civil_") !== false){

                $newKey = str_replace("civil_","",$key);
                foreach($value as $numKey => $data){
                    $civil_service[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"work_") !== false){

                $newKey = str_replace("work_","",$key);
                foreach($value as $numKey => $data){
                    $work_experience[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"voluntary_") !== false){

                $newKey = str_replace("voluntary_","",$key);
                foreach($value as $numKey => $data){
                    $voluntary[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"other_") !== false){

                $newKey = str_replace("other_","",$key);
                foreach($value as $numKey => $data){
                    $other_info[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"learning_") !== false){

                $newKey = str_replace("learning_","",$key);
                foreach($value as $numKey => $data){
                    $learning[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"ref_") !== false){

                $newKey = str_replace("ref_","",$key);
                foreach($value as $numKey => $data){
                    $references[$numKey][$newKey]=$data;
                }

            }else if(strpos($key,"gov_") !== false){

                $newKey = str_replace("gov_","",$key);
                $government_id[$newKey]=$value;

            }else if(strpos($key,"child_") !== false){

                $newKey = str_replace("child_","",$key);
                $children[$newKey]=$value;


            }else if(strpos($key,"yes_") !== false){
                $survey[$ctr-1]['details'] = $value;

            }else if(strpos($key,"q".$ctr2."_no") !== false){
                $survey[$ctr2]['id_no'] = $value;
                $ctr2++;


            }else if(strpos($key,"q".$ctr) !== false){
                $survey[$ctr]['check_box'] = $value;
                $ctr++;


            }else if(strpos($key,"s_") !== false){
                $newKey = "";
                if($key == "s_business_address"){
                    $newKey = "business_address";
                }else if($key == "s_employer_business_name"){
                    $newKey = "employer_business_name";
                }else{
                    $newKey = str_replace("s_","",$key);
                }

                $spouse[$newKey] = $value;

            }else if(strpos($key,"f_") !== false){
                $newKey = str_replace("f_","",$key);
                $parents[0][$newKey] = $value;
                if(!isset($parents[0]['type']) && empty($parents[0]['type'])){
                    $parents[0]['type'] = 1;
                }
            }else if(strpos($key,"m_") !== false){
                $newKey = str_replace("m_","",$key);
                $parents[1][$newKey] = $value;
                if(!isset($parents[1]['type']) && empty($parents[1]['type'])){
                    $parents[1]['type'] = 2;
                }
            }
        }

        // Dev::pvx($personalInformation);

        if(empty($checkerRes)){
            $basic['id']='2018001';
            $basicQuery = 'Insert Into employees(id,first_name,middle_name,last_name,email_address,extension) 
						values(:id,:first_name,:middle_name,:last_name,:email_address,:extension)';
        }else{
            $basicQuery = 'Insert Into employees(first_name,middle_name,last_name,email_address,extension) 
					values(:first_name,:middle_name,:last_name,:email_address,:extension)';
        }


        $result = $this->con->prepare($basicQuery);
        $result->execute($basic);

        if($result){
            $id = $this->con->lastInsertId();
            $personalInformation['employee_id']= $id;
            $spouse['employee_id']= $id;
            $employment['employee_id']= $id;
            $salary['employee_id']= $id;
            $government_id['employee_id']= $id;


            //personal info
            $insertPersonal = 'Insert Into 
							employee_has_personal_informations(employee_id,birthday,citizenship,sex,civil_status,height,weight,place_of_birth,telephone_no,blood_type,gsis_no,pag_ibig_no,phil_health_no,sss_no,tin_no,agency_employee_no,mobile_no,dual_citizen_country,dual_citizen) 
							values(:employee_id,:birthday,:citizenship,:sex,:civil_status,:height,:weight,:place_of_birth,:telephone_no,:blood_type,:gsis_no,:pag_ibig_no,:phil_health_no,:sss_no,:tin_no,:agency_employee_no,:mobile_no,:dual_citizen_country,:dual_citizen)';
            $res1 = $this->con->prepare($insertPersonal);
            $res1->execute($personalInformation);

            //Spouse
            $insertSpouse = 'Insert Into employee_has_spouse(employee_id,first_name,middle_name,last_name,extension,occupation,employer_business_name,business_address,telephone_no) 
							values(:employee_id,:first_name,:middle_name,:last_name,:extension,:occupation,:employer_business_name,:business_address,:telephone_no)';
            $res1 = $this->con->prepare($insertSpouse);


            $res1->execute($spouse);

            //parents
            foreach($address as $key=>$value){
                $newParams = array();
                $newParams= $value;
                // foreach($value as $newKey=>$data){

                ;
                if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                    $newParams['employee_id']= $id;
                }

                // }
                $insertAddress = 'Insert Into employee_has_address(employee_id,type,house_no,street,subdivision,barangay,municipality,province,zip_code) 
								values(:employee_id,:house_type,:house_no,:street,:subdivision,:barangay,:municipality,:province,:zip_code)';
                $res1 = $this->con->prepare($insertAddress);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }
            //parents
            foreach($parents as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }

                }
                $insertParents = 'Insert Into employee_has_parents(employee_id,first_name,middle_name,last_name,extension,type) 
								values(:employee_id,:first_name,:middle_name,:last_name,:extension,:type)';
                $res1 = $this->con->prepare($insertParents);

                $res1->execute($newParams);
            }

            $childParams = array();
            //children
            foreach($children as $key=>$value){



                foreach($value as $newKey=>$data){
                    $childParams[$newKey][$key]= $data;

                    if(!isset($childParams[$newKey]['employee_id']) && empty($childParams[$newKey]['employee_id'])){
                        $childParams[$newKey]['employee_id']= $id;
                    }

                }


            }
            foreach($childParams as $value){
                $insertChild = 'Insert Into employee_has_childrens(employee_id,full_name,birthday) 
								values(:employee_id,:name,:birthday)';
                $res1 = $this->con->prepare($insertChild);

                $res1->execute($value);
            }

            // Dev::pvx($education);
            //education
            foreach($education as $value){
                $newParams = array();
                $boolean =false;
                foreach($value as $key=>$data){
                    $error =0;
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }

                }


                $insertEducation = 'Insert Into employee_has_educations(employee_id,name_of_school,course,attendance_from,attendance_to,highest_level,year_graduated,honor_received,type) 
								values(:employee_id,:school_name,:education,:from_date,:to_date,:level,:year,:scholar,:type)';
                $res1 = $this->con->prepare($insertEducation);

                $res1->execute($newParams);
            }


            //civil service
            foreach($civil_service as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $insertCivilService = 'Insert Into employee_has_civil_service_eligibility(employee_id,career_service,rating,date_of_examination,place_of_examination,license_no,validity_date) 
								values(:employee_id,:service,:rating,:date_of_exam,:place_of_exam,:number_license,:date_of_validity)';
                $res1 = $this->con->prepare($insertCivilService);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }

            //work experience
            foreach($work_experience as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $insertWork = 'Insert Into employee_has_work_experiences(employee_id,date_from,date_to,position,company,salary,salary_job_pay_grade,status_of_appointment,government_service) 
								values(:employee_id,:from,:to,:position,:company,:salary,:grade,:status,:service)';
                $res1 = $this->con->prepare($insertWork);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }

            // Dev::pvx($voluntary);
            //voluntary
            foreach($voluntary as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $insertVoluntary = 'Insert Into employee_has_voluntary_works(employee_id,name_and_address,date_from,date_to,no_of_hours,position) 
								values(:employee_id,:name_and_address,:from,:to,:no_of_hour,:position)';
                $res1 = $this->con->prepare($insertVoluntary);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }


            //learning
            foreach($learning as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $insertLearning = 'Insert Into employee_has_training_programs(employee_id,training_programs,date_from,date_to,no_of_hours,type,conducted) 
								values(:employee_id,:title,:from,:to,:hours,:ids,:sponsored)';
                $res1 = $this->con->prepare($insertLearning);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }


            //other information
            foreach($other_info as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $otherInfo = 'Insert Into employee_has_other_informations(employee_id,special_skills,recognition,membership) 
								values(:employee_id,:skills,:recognition,:organization)';
                $res1 = $this->con->prepare($otherInfo);
                // Dev::pvx($newParams);
                $res1->execute($newParams);
            }


            $newCtr= 1;
            // Dev::pv($survey);
            //Question
            foreach($survey as $key=>$value){
                $newParams = $value;
                // Dev::pvx($newParams);

                if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                    $newParams['employee_id']= $id;
                    // $newParams['id_no']= $newCtr;
                }
                if(count($newParams) == 3){
                    $insertSurvey = 'Insert Into employee_has_answers(employee_id,check_box,id_no) 
								values(:employee_id,:check_box,:id_no)';
                    $res1 = $this->con->prepare($insertSurvey);
                }else{
                    $insertSurvey = 'Insert Into employee_has_answers(employee_id,check_box,details,id_no) 
								values(:employee_id,:check_box,:details,:id_no)';
                    $res1 = $this->con->prepare($insertSurvey);
                }

                // Dev::pv($newParams);
                $res1->execute($newParams);
                $newCtr++;
            }

            //Reference
            foreach($references as $value){
                $newParams = array();
                foreach($value as $key=>$data){
                    $newParams[$key]= $data;
                    if(!isset($newParams['employee_id']) && empty($newParams['employee_id'])){
                        $newParams['employee_id']= $id;
                    }
                }
                $insertReference = 'Insert Into employee_has_references(employee_id,name,address,telephone_no) 
								values(:employee_id,:name,:address,:tel_no)';
                $res1 = $this->con->prepare($insertReference);
                // Dev::pv($newParams);
                $res1->execute($newParams);
            }


            //Government
            $insertGovernmentID = 'Insert Into employee_has_government_ids(employee_id,government_id,government_issued_id,date_of_inssuance,place_of_inssuance) 
							values(:employee_id,:government_id,:government_issued_id,:date_of_inssuance,:place_of_inssuance)';
            $res1 = $this->con->prepare($insertGovernmentID);

            $res1->execute($government_id);	

            //Employment
            $insertDetails = 'Insert Into employee_has_employment_details(employee_id,date_hired,position,department) 
							values(:employee_id,:date_hired,:position,:department)';
            $res1 = $this->con->prepare($insertDetails);

            $res1->execute($employment);

            //Salary
            $insertSalary = 'Insert Into employee_has_salary(employee_id,salary,sss,phil_health,pag_ibig,rate) 
							values(:employee_id,:salary,:sss,:phil_health,:pag_ibig,:rate)';
            $res1 = $this->con->prepare($insertSalary);
            // Dev::pvx($salary);
            $res1->execute($salary);			
            $arrayReturn = array('status'=>1,'employee_id'=>$id);
            return $arrayReturn;
        }else{
            $arrayReturn = array('status'=>0);
            return $arrayReturn;
        }
    }
    public function updateEmployee($data)
    {
        $remove_civil_ids =array();
        $remove_children_ids =array();
        $remove_learning_ids =array();
        $remove_other_ids =array();
        $remove_voluntary_ids =array();
        $remove_work_ids =array();

        if(isset($data['removeCivil_ids'])){
            $remove_civil_ids=$data['removeCivil_ids'];
        }

        if(isset($data['removeChildren_ids'])){
            $remove_children_ids=$data['removeChildren_ids'];
        }

        if(isset($data['removeLearning_ids'])){
            $remove_learning_ids=$data['removeLearning_ids'];
        }

        if(isset($data['removeOther_ids'])){
            $remove_other_ids=$data['removeOther_ids'];
        }

        if(isset($data['removeVoluntary_ids'])){
            $remove_voluntary_ids=$data['removeVoluntary_ids'];
        }

        if(isset($data['removeWork_ids'])){
            $remove_work_ids=$data['removeWork_ids'];
        }
        // Dev::pvx($data);
        $basic=array();
        $personalInformation=array();
        $spouse = array();
        $parents = array();
        $children = array();
        $education = array();
        $civil_service = array();
        $work_experience = array();
        $voluntary = array();
        $learning = array();
        $other_info = array();
        $survey = array();
        $references = array();
        $government_id = array();
        $employment = array();
        $salary = array();
        $address = array();
        $ctr = 1;
        $ctr2 = 1;
        $ctr3 = 1;
        $checkBasic = array(
            'first_name',
            'middle_name',
            'last_name',
            'email_address',
            'extension',
            'id'

        );
        $checkSalary = array(
            'salary',
            'sss',
            'phil_health',
            'pag_ibig',
            'rate',
            'salary_id'

        );

        $checkPersonal = array(
            'dual_citizen',
            'dual_citizen_country',
            'birthday',
            'citizenship',
            'sex',
            'civil_status',
            'height',
            'weight',
            'place_of_birth',
            'telephone_no',
            'blood_type',
            'gsis_no',
            'pag_ibig_no',
            'phil_health_no',
            'sss_no',
            'tin_no',
            'agency_employee_no',
            'mobile_no',
            'personal_id'

        );
        $checkEmployment = array(
            'date_hired',
            'position',
            'department',
            'details_id'

        );
        $checkAddress = array(
            'house_no',
            'street',
            'subdivision',
            'barangay',
            'municipality',
            'province',
            'zip_code',
            'address_id',
            'house_type'

        );
        $employeeID = "";

        if(isset($data['id'])){
            $employeeID=$data['id'];
        }

        if(isset($data['spouse_id'])){
            $spouse['spouse_id'] = $data['spouse_id'];
        }
        foreach($data as $key => $value){




            if(in_array($key,$checkEmployment)){
                $employment[$key] = $value;

            }else if(in_array($key,$checkSalary)){
                $salary[$key] = $value;

            }else if(in_array($key,$checkBasic)){
                $basic[$key] = $value;

            }else if(in_array($key,$checkAddress)){
                foreach($value as $numKey => $data){

                    $address[$numKey][$key]=$data;
                    if(!isset($data['address_id'])){
                        $address[$numKey]['employee_id'] = $employeeID;
                    }
                }
            }else if(in_array($key,$checkPersonal)){
                $personalInformation[$key] = $value;
            }else if(strpos($key,"educ_") !== false){

                $newKey = str_replace("educ_","",$key);
                foreach($value as $numKey => $data){
                    $education[$numKey][$newKey]=$data;
                    $education[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"civil_") !== false){

                $newKey = str_replace("civil_","",$key);

                foreach($value as $numKey => $data){
                    $civil_service[$numKey][$newKey]=$data;
                    $civil_service[$numKey]['employee_id'] = $employeeID;
                }



            }else if(strpos($key,"work_") !== false){

                $newKey = str_replace("work_","",$key);
                foreach($value as $numKey => $data){
                    $work_experience[$numKey][$newKey]=$data;
                    $work_experience[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"voluntary_") !== false){

                $newKey = str_replace("voluntary_","",$key);
                foreach($value as $numKey => $data){
                    $voluntary[$numKey][$newKey]=$data;
                    $voluntary[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"other_") !== false){

                $newKey = str_replace("other_","",$key);
                foreach($value as $numKey => $data){
                    $other_info[$numKey][$newKey]=$data;
                    $other_info[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"learning_") !== false){

                $newKey = str_replace("learning_","",$key);
                foreach($value as $numKey => $data){
                    $learning[$numKey][$newKey]=$data;
                    $learning[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"ref_") !== false){

                $newKey = str_replace("ref_","",$key);
                foreach($value as $numKey => $data){
                    $references[$numKey][$newKey]=$data;
                    $references[$numKey]['employee_id'] = $employeeID;
                }

            }else if(strpos($key,"gov_") !== false){

                $newKey = str_replace("gov_","",$key);
                $government_id[$newKey]=$value;
                $government_id['employee_id'] = $employeeID;

            }else if(strpos($key,"child_") !== false){

                $newKey = str_replace("child_","",$key);

                foreach($value as $numkey => $smallData){
                    $children[$numkey]['employee_id'] = $employeeID;
                    $children[$numkey][$newKey]=$smallData;


                }



            }else if(strpos($key,"yes_") !== false){

                $survey[$ctr-1]['details'] = $value;

            }else if(strpos($key,"q".$ctr2."_id") !== false){
                $survey[$ctr2]['id'] = $value;
                $ctr2++;


            }else if(strpos($key,"q".$ctr3."_no") !== false){
                $survey[$ctr3]['id_no'] = $value;
                $ctr3++;


            }else if(strpos($key,"q".$ctr) !== false){
                $survey[$ctr]['check_box'] = $value;
                $survey[$ctr]['employee_id'] = $employeeID;
                $ctr++;


            }else if(strpos($key,"s_") !== false){
                $newKey = "";
                if($key == "s_business_address"){
                    $newKey = "business_address";
                }else if($key == "s_employer_business_name"){
                    $newKey = "employer_business_name";
                }else{
                    $newKey = str_replace("s_","",$key);
                }

                $spouse[$newKey] = $value;
                $spouse['employee_id'] = $employeeID;

            }else if(strpos($key,"f_") !== false){
                $newKey = str_replace("f_","",$key);
                $parents[0][$newKey] = $value;
                if(!isset($parents[0]['type']) && empty($parents[0]['type'])){
                    $parents[0]['type'] = 1;
                }
                $parents[0]['employee_id'] = $employeeID;
            }else if(strpos($key,"m_") !== false){
                $newKey = str_replace("m_","",$key);
                $parents[1][$newKey] = $value;
                if(!isset($parents[1]['type']) && empty($parents[1]['type'])){
                    $parents[1]['type'] = 2;
                }
                $parents[1]['employee_id'] = $employeeID;
            }
        }




        $query = 'Update employees 
				set 
				first_name=:first_name, 
				middle_name=:middle_name,
				last_name=:last_name,
				email_address=:email_address,
				extension=:extension

				Where id=:id ';
        $result = $this->con->prepare($query);

        $result->execute($basic);


        self::updateSalary($salary);
        self::updateEmployment($employment);
        self::updatePersonalInformation($personalInformation);
        self::updateAddress($address);
        self::updateSpouse($spouse);
        self::updateParents($parents);
        self::updateChildren($children);
        self::updateEducation($education);
        self::updateCivilService($civil_service);
        self::updateWorkExperience($work_experience);
        self::updateVoluntary($voluntary);
        self::updateLearning($learning);
        self::updateOtherInformation($other_info);
        // Dev::pvx();
        self::updateSurvey($survey);
        self::updateReferences($references);
        self::updateGovernmentID($government_id);

        //Delete
        self::deleteCivil($remove_civil_ids);
        self::deleteChildren($remove_children_ids);
        self::deleteLearning($remove_learning_ids);
        self::deleteOthers($remove_other_ids);
        self::deleteVoluntary($remove_voluntary_ids);
        self::deleteWork($remove_work_ids);



        if($result){

            return true;
        }else{
            return false;
        }
    }

    public function updateSalary($params)
    {

        $query = 'Update employee_has_salary 
				set 
				salary=:salary, 
				rate=:rate,
				sss=:sss,
				phil_health=:phil_health,
				pag_ibig=:pag_ibig
				Where id=:salary_id';
        $result = $this->con->prepare($query);
        $result->execute($params);

    }
    public function deleteCivil($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_civil_service_eligibility 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function deleteChildren($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_childrens 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function deleteLearning($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_training_programs 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function deleteOthers($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_other_informations 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function deleteVoluntary($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_voluntary_works 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function deleteWork($params)
    {
        if(!empty($params)){
            $newArray = explode(",",$params);
            foreach($newArray as $ids){
                $query = 'Delete from employee_has_work_experiences 
					Where id=?';
                $result = $this->con->prepare($query);
                $result->execute(array($ids));
            }

        }



    }
    public function updateEmployment($params)
    {

        $query = 'Update employee_has_employment_details 
				set 
				date_hired=:date_hired, 
				position=:position,
				department=:department
				Where id=:details_id';
        $result = $this->con->prepare($query);
        $result->execute($params);

    }

    public function updateSurvey($params)
    {


        foreach($params as $data){
            $query="";
            if(isset($data['id'])){
                unset($data['employee_id']);
                if(count($data) == 3){
                    $query = '	Update employee_has_answers 
									set 
										check_box=:check_box, 
										id_no=:id_no
										Where id=:id';
                }else{

                    $query = '	Update employee_has_answers 
									set 
										check_box=:check_box, 
										id_no=:id_no,
										details=:details
										Where id=:id';
                }


            }else{
                if(count($data) == 3){
                    $query = 'Insert Into employee_has_answers(employee_id,check_box,id_no) 
								values(:employee_id,:check_box,:id_no)';
                }else{
                    $query = 'Insert Into employee_has_answers(employee_id,check_box,details,id_no) 
								values(:employee_id,:check_box,:details,:id_no)';
                }
            }


            $result = $this->con->prepare($query);

            $result->execute($data);
        }

    }
    public function updatePersonalInformation($params)
    {
        // Dev::pvx($params);
        $query = 'Update employee_has_personal_informations 
				set 
				birthday=:birthday, 
				sex=:sex,
				civil_status=:civil_status,
				citizenship=:citizenship,
				height=:height,
				weight=:weight,
				place_of_birth=:place_of_birth,
				telephone_no=:telephone_no,
				blood_type=:blood_type,
				gsis_no=:gsis_no,
				pag_ibig_no=:pag_ibig_no,
				phil_health_no=:phil_health_no,
				sss_no=:sss_no,
				tin_no=:tin_no,
				mobile_no=:mobile_no,
				dual_citizen_country=:dual_citizen_country,
				dual_citizen=:dual_citizen,
				agency_employee_no=:agency_employee_no
				Where id=:personal_id';
        $result = $this->con->prepare($query);
        $result->execute($params);

    }
    public function updateAddress($params)
    {
        $query ="";
        foreach($params as $data){
            if(isset($data['address_id'])){
                $query = 'Update employee_has_address 
					set 
						type=:house_type, 
						house_no=:house_no,
						street=:street,
						subdivision=:subdivision,
						barangay=:barangay,
						municipality=:municipality,
						province=:province,
						zip_code=:zip_code
						Where id=:address_id';

                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_address(employee_id,type,house_no,street,subdivision,barangay,municipality,province,zip_code) 
								values(:employee_id,:house_type,:house_no,:street,:subdivision,:barangay,:municipality,:province,:zip_code)';
            }

            $result = $this->con->prepare($query);
            // Dev::pvx($query);
            $result->execute($data);
        }


    }
    public function updateGovernmentID($params)
    {

        if(isset($params['id'])){
            $query = 'Update employee_has_government_ids 
				set 
				government_id=:government_id, 
				government_issued_id=:government_issued_id,
				date_of_inssuance=:date_of_inssuance,
				place_of_inssuance=:place_of_inssuance
				Where id=:id';

            unset($params['employee_id']);
        }else{
            $query = 'Insert Into employee_has_government_ids(employee_id,government_id,government_issued_id,date_of_inssuance,place_of_inssuance) 
							values(:employee_id,:government_id,:government_issued_id,:date_of_inssuance,:place_of_inssuance)';

        }

        $result = $this->con->prepare($query);
        $result->execute($params);


    }
    public function updateReferences($params)
    {

        foreach($params as $data){
            if(isset($data['id'])){
                $query = 'Update employee_has_references 
				set 
					name=:name, 
					address=:address,
					telephone_no=:tel_no
					Where id=:id';

                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_references(employee_id,name,address,telephone_no) 
								values(:employee_id,:name,:address,:tel_no)';
            }

            $result = $this->con->prepare($query);

            $result->execute($data);
        }


    }
    public function updateSpouse($params)
    {

        if($params['spouse_id']){
            $query = 'Update employee_has_spouse 
			set 
				first_name=:first_name, 
				middle_name=:middle_name,
				last_name=:last_name,
				extension=:extension,
				occupation=:occupation,
				employer_business_name=:employer_business_name,
				business_address=:business_address,
				telephone_no=:telephone_no
				Where id=:spouse_id';
            unset($params['employee_id']);
        }else{
            $query = 'Insert Into employee_has_spouse(employee_id,first_name,middle_name,last_name,extension,occupation,employer_business_name,business_address,telephone_no) 
							values(:employee_id,:first_name,:middle_name,:last_name,:extension,:occupation,:employer_business_name,:business_address,:telephone_no)';
            unset($params['spouse_id']);
        }

        $result = $this->con->prepare($query);

        $result->execute($params);



    }
    public function updateParents($params)
    {

        foreach($params as $data){
            if(isset($data['parent_id'])){
                $query = 'Update employee_has_parents 
				set 
					first_name=:first_name, 
					middle_name=:middle_name,
					last_name=:last_name,
					extension=:extension,
					type=:type
					Where id=:parent_id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_parents(employee_id,first_name,middle_name,last_name,extension,type) 
								values(:employee_id,:first_name,:middle_name,:last_name,:extension,:type)';
                unset($data['parent_id']);
            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }

    public function updateEducation($params)
    {

        foreach($params as $data){
            if(isset($data['id'])){
                $query = 'Update employee_has_educations 
				set 
					name_of_school=:school_name, 
					course=:education,
					attendance_from=:from_date,
					attendance_to=:to_date,
					highest_level=:level,
					year_graduated=:year,
					honor_received=:scholar,
					type=:type
					Where id=:id';

                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_educations(employee_id,name_of_school,course,attendance_from,attendance_to,highest_level,year_graduated,honor_received,type) 
								values(:employee_id,:school_name,:education,:from_date,:to_date,:level,:year,:scholar,:type)';

            }

            $result = $this->con->prepare($query);

            $result->execute($data);
        }


    }
    public function updateWorkExperience($params)
    {

        foreach($params as $data){
            if(isset($data['experience_id'])){
                $query = 'Update employee_has_work_experiences 
				set 
					date_from=:from, 
					date_to=:to,
					position=:position,
					company=:company,
					salary=:salary,
					salary_job_pay_grade=:grade,
					status_of_appointment=:status,
					government_service=:service
					Where id=:experience_id';

                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_work_experiences(employee_id,date_from,date_to,position,company,salary,salary_job_pay_grade,status_of_appointment,government_service) 
								values(:employee_id,:from,:to,:position,:company,:salary,:grade,:status,:service)';

            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }
    public function updateChildren($params)
    {

        foreach($params as $data){
            if(isset($data['id'])){
                $query = 'Update employee_has_childrens 
				set 
					full_name=:name, 
					birthday=:birthday
					Where id=:id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_childrens(employee_id,full_name,birthday) 
								values(:employee_id,:name,:birthday)';
            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }
    public function updateVoluntary($params)
    {

        foreach($params as $data){
            if(isset($data['id'])){
                $query = 'Update employee_has_voluntary_works 
				set 
					name_and_address=:name_and_address, 
					date_from=:from,
					date_to=:to,
					no_of_hours=:no_of_hour,
					position=:position
					Where id=:id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_voluntary_works(employee_id,name_and_address,date_from,date_to,no_of_hours,position) 
								values(:employee_id,:name_and_address,:from,:to,:no_of_hour,:position)';

            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }
    public function updateOtherInformation($params)
    {

        foreach($params as $data){
            if(isset($data['info_id'])){
                $query = 'Update employee_has_other_informations 
				set 
					special_skills=:skills, 
					recognition=:recognition,
					membership=:organization
					Where id=:info_id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_other_informations(employee_id,special_skills,recognition,membership) 
								values(:employee_id,:skills,:recognition,:organization)';

            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }
    public function updateLearning($params)
    {


        foreach($params as $data){

            if(isset($data['id'])){
                $query = 'Update employee_has_training_programs 
				set 
					training_programs=:title, 
					date_from=:from,
					date_to=:to,
					no_of_hours=:hours,
					type=:ids,
					conducted=:sponsored
					Where id=:id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_training_programs(employee_id,training_programs,date_from,date_to,no_of_hours,type,conducted) 
								values(:employee_id,:title,:from,:to,:hours,:ids,:sponsored)';

            }

            $result = $this->con->prepare($query);
            $result->execute($data);
        }


    }
    public function updateCivilService($params)
    {

        foreach($params as $data){
            if(isset($data['id'])){
                $query = 'Update employee_has_civil_service_eligibility 
				set 
					career_service=:service, 
					rating=:rating,
					date_of_examination=:date_of_exam,
					place_of_examination=:place_of_exam,
					license_no=:number_license,
					validity_date=:date_of_validity
					Where id=:id';
                unset($data['employee_id']);
            }else{
                $query = 'Insert Into employee_has_civil_service_eligibility(employee_id,career_service,rating,date_of_examination,place_of_examination,license_no,validity_date) 
								values(:employee_id,:service,:rating,:date_of_exam,:place_of_exam,:number_license,:date_of_validity)';

            }

            $result = $this->con->prepare($query);

            $result->execute($data);
        }


    }

    public function deleteEmployee($id)
    {
        $query = 'Update employees set status = '.self::STATUS_INACTIVE.' where id= ?';
        $result = $this->con->prepare($query);
        $result->execute(array($id));

        if($result->rowCount()){
            return true;
        }else{
            return false;
        }
    }


    public function regularization($id,$employee_id)
    {


        $params['id']=$id;
        $params['status']=self::EMPLOYMENT_REGULAR;
        $query = 'Update employee_has_employment_details 
				set 
				status=:status
				Where id=:id';
        $result = $this->con->prepare($query);
        $result->execute($params);

        if($result){

            $newParams['id']=$employee_id;
            $newQuery = 'Insert into employee_has_leave_details(employee_id)
					Values(:id)';
            $result = $this->con->prepare($newQuery);
            $result->execute($newParams);

            return true;
        }else{
            return false;
        }

    }

    public function invite($id,$name,$email)
    {


        require '../extensions/phpmailer/PHPMailerAutoload.php';

        $emailAddress = 'hrmsdhvtsu';
        $password = 'hrmsdhvtsu2018';			
        $subject = 'Invitation to employee portal'; 
        $message = '				
				<!DOCTYPE html>
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				<title>Invitation</title>
				<body style ="background:#eee;">
				<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style ="padding: 40px; max-width:640px;background-color:#f3f3f3;display:block;margin:0 auto; font-family:Lato, sans-serif; color:#626262;font-size:13px;line-height:22px;" width ="600">	
				<tbody>									
				<tr>										
				<td style ="background-color: #031864; padding: 34px 122px;">	
					<h1 width ="600" style ="max-width:600px;width:100%; text-align:center; color:#fff;">MUNICIPALITY of BACOLOR</h1>										
				</td>									
				</tr>									
				<tr>										
				<td style ="background-color: #ffffff; text-align: center; padding: 40px;">											
				<h2 style="font-size: 30px; color:#000; font-style: italic;">You have been invited to create your account!</h2>											
				<br>											
				<p style ="color:#000; font-size: 16px;">Please click this link to register <a href="municipality-of-bacolor.000webhostapp.com/index.php?action=registration&id='.$id.'&name='.$name.'">here</a>.</p>											
				<br>											
				<br>										
				</td>									
				</tr>									
				<tr>										
				<td  style ="background-color: #031864; text-align: center; font-size: 16px; color: #fff;">											
				<p>© 2016. All rights reserved. Created by DHVTSU STUDENTS</p>										
				</td>									
				</tr>								
				</tbody>							
				</table>						
				</body>';				



        $mail = new PHPMailer;						
        $mail->isSMTP();	
        // $mail->SMTPDebug = 2;
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );			
        $mail->Host = 'smtp.gmail.com';			
        $mail->Port = 587;			
        $mail->SMTPSecure = 'tls';			
        $mail->SMTPAuth = true;			
        $mail->Username = $emailAddress;			
        $mail->Password = $password;			
        $mail->setFrom('noreply@hrms.com', 'HRMS');			
        $mail->addReplyTo('hrmsdhvtsu@gmail.com', 'HRMS');			
        $mail->addAddress($email);			
        $mail->Subject = $subject;			
        $mail->msgHTML($message);						


        if (!$mail->send()) {

            // $error = "Mailer Error: " . $mail->ErrorInfo;
            // echo '<script>alert("'.$error.'");</script>';
            return false;
        }else {
            return true;
        }
    }


    public function getEmployeeSalary($id)
    {
        $query = 'SELECT *
				from `employee_has_salary` 
				where employee_id = ? ';

        $result = $this->con->prepare($query);
        $result->execute($id);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;
    }
    public function getEmployeeLastID()
    {
        $query = 'SELECT id
				from `employees` 
				order by id desc
                limit 1';

        $result = $this->con->prepare($query);
        $result->execute();
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;
    }

    public function getEmployeeProfile($id)
    {
        $query = 'SELECT *
				from
				employee_has_fileuploads where employee_id = ?			
				order by id desc
                limit 1';

        $result = $this->con->prepare($query);
        $result->execute($id);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        return $return;
    }

    public function returnDepartment($id)
    {
        if($id == 1){
            return "Human Resources";
        }else if($id == 2){
            return "Admin";
        }else if($id == 3){
            return "Information Technology";
        }else if($id == 4){
            return "Back Office";
        }else if($id == 5){
            return "Maintenance";
        }else{
            return "N/A";
        }

    }
    public function returnPosition($id)
    {
        if($id == 1){
            return "Teacher 1";
        }else if($id == 2){
            return "Teacher 2";
        }else if($id == 3){
            return "Teacher 3";
        }else if($id == 4){
            return "Head Teacher";
        }else if($id == 5){
            return "Principal";
        }else{
            return "N/A";
        }

    }
	
}
