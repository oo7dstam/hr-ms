<?php 	

session_start();
include 'lib/db.php'; 
include 'components/dev.php';

spl_autoload_register(function($model_name) {
	include 'model/' . $model_name . '.php';
});


if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = '';
}

if($action == 'registration'){
    
    
////	include_once('includes/main.php'); 	
    include_once('./includes/header.php'); 
//	include_once('./includes/nav.php'); 
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
//        
////      $modelIfExist = new IfExistModel;
//        $ifExistModel = new EmployeeModel;	
//	    $IfExist = $ifExistModel->IfExist(array($id));
        
        $ifExistModel = new EmployeeModel;	
	    $IfExist = $ifExistModel->IfExist(array($id));
        
        $modelEmployee = new EmployeeModel;
        $employeeDetails = $modelEmployee->getEmployeeDetails(array($id));
        
//      echo $id;
        
        
        
        if(empty($IfExist)){
           include_once('view/IfExist.php');
            
//            echo 'Record Found';
        }else{
            echo ' You are already registered.
                   <a href="index.php">Click Here</a> to login.</br>
                   For any question please contact the HR Department.';
            
        }
        
    }else{
        echo 'ID not Found';
    }
    
}else{
            if(isset($_SESSION['employee_access'])){
            $sessionEmployee = $_SESSION['employee_access'];
            $sessionEmployeeId = $_SESSION['employee_id'];

            include_once('includes/header.php'); 
            include_once('includes/nav.php'); 

            if(!empty(isset($_GET['action'])) && isset($_GET['action'])){		


                $action = $_GET['action'];
                $modelEmployee = new EmployeeModel;
        //		$modelAdmin = new AdminModel;
        		$modelAvailableLeave = new LeaveModel;
                $id = $sessionEmployeeId;
        //        echo $now = date("Y-m-d H:i:s");
                //MODEL EMPLOYEE ----------------------------------


                if($_GET['action'] == "applyLeave"){

                    include_once('view/applyLeave.php');

                }else if($_GET['action'] == "leaveHistory"){

                    include_once('view/leaveHistory.php');

                }else if($_GET['action'] == "employeeDetails"){
                    $id = 0;
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }
                    include_once ('view/employeeProfile1.php');

                }else if($_GET['action'] == "updateEmployee"){
                    $id = $_SESSION['employee_id'];
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }
                    include_once('includes/footer.php'); 
                    include_once ('view/updateEmployeeProfile.php'); 

                }else if($_GET['action'] == "getAllLeaveToday"){

                    include_once ('view/allLeavesToday.php');

                }else if($_GET['action'] == "getAllApplicant"){

                    include_once ('view/allApplicant.php');

                }else if($_GET['action'] == "availableLeave"){

                    include_once ('view/availableLeave.php');

                }else if($_GET['action'] == "attendance"){
                    
                    include_once ('view/attendance.php');

                }else if($_GET['action'] == "payroll"){

                    include_once ('view/payroll.php');

                }else if($_GET['action'] == "viewPayroll"){
                    $page = "Payroll";

                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }
                    include_once('./view/viewPayroll.php');
                }else{

                    include_once('view/index.php'); 

                }

            }else{
                echo 'action is empty';
            }

            include_once('includes/footer.php'); 	
            include_once('script/logout.php');
            include_once('modal/errorLogout.php');
            include_once('modal/successLogout.php');
        }else{
            include_once('includes/login.php');	
        }
}




