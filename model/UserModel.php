<?php

class UserModel {
	
	public $con;
    function __construct() {
        $mysql =  new MysqlCon();
		$this->con = $mysql->con;
    }
	
    public function job_application($params)
	{
        $query = 'INSERT INTO applicants(first_name,last_name,email_address,contact_number,address,position,country,city) VALUES(:first_name,:last_name,:email_address,:number,:address,:desired_position,:country,:city)';
		$result = $this->con->prepare($query);
		$result->execute($params);
		
		if($result){
			return true; 
		}else{
			return false;
		}
	}
	
	public static function saveUser($id=NULL,$arr,$mode,$deleted_fields=NULL)
	{
		
	}
   
	public static function getAllUser() 
	{
       
	}
	public static function getIssuedBy($id)
	{
		
		$query = '
			Select
			`name`
			From `users`
			Where `id`=?
		';
		$params = array($id);
		$result = prepareTable($query,$params);

		return $result[0]['name'];
		
	}
	public static function getUserDetails($id)
	{
		
		$query = '
			Select
			`name`,
			`username`
			From `users`
			Where `id`=?
		';
		$params = array($id);
		
		return prepareTable($query,$params);
		
	}
	public function authenticate($data)
	{
				
		$query = 'SELECT * from `employee_has_credentials` Where `username` = ? AND `password` = ? ';

		$result = $this->con->prepare($query);
		$result->execute(
				array(
					$data['username'],
					$data['password']
				)
			);
		$return = $result->fetch(PDO::FETCH_ASSOC);	
        
        if(!empty($return)){
            $_SESSION['employee_access'] = "employee";
            $_SESSION['employee_id'] = $return['employee_id'];
            $_SESSION['account']=$return;
            echo json_encode(1);
            
//            if($return['status'] == 1){
//                            // 1 = active
//                }else if($return['status'] == 2){
//
//                    // 2 = inactive
//                    echo json_encode(2);
//
//                }else if($return['status'] == 3){
//
//                    // 3 = pending for approval
//                    echo json_encode(3);
//
//                }else if($return['status'] == 4){
//
//                    // 4 = disapproved
//                    echo json_encode(4);
//
//                }else{
//                    echo json_encode(0);
//                }     

        }else{       

            echo json_encode(0);                
        }
        
//
//        if($return['status'] == 1){
//            // 1 = active
//            
//            
//            
//        }else if($return['status'] == 2){
//            
//            // 2 = inactive
//            echo json_encode(2);
//            
//        }else if($return['status'] == 3){
//            
//            // 3 = pending for approval
//            echo json_encode(3);
//            
//        }else if($return['status'] == 4){
//            
//            // 4 = disapproved
//            echo json_encode(4);
//            
//        }else{
//            echo json_encode(000);
//        }     
//		
		
		
		exit();
		
	}
	
	
	
}
