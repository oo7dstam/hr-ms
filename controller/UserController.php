<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/EmployeeModel.php';
include '../model/LeaveModel.php';

$model = new UserModel();
$leaveModel = new LeaveModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "authenticate"){
			
			$model->authenticate($_POST);
				
		
        }else if($_GET['action'] == "applyLeave"){
            $employee_id = null;
            $leaveType = null;
            $fromDate = null;
            $toDate = null;
            $reason = null;
            $application_date = null;
            
            $leaveType = null;
            $seletedLeave = null;

            if(isset($_POST['employee_id'])){
                $employee_id = $_POST['employee_id'];
            } 
            if(isset($_POST['leaveType'])){
                $leaveType = $_POST['leaveType'];
            }
            
            if(isset($_POST['fromDate'])){
                $fromDate = $_POST['fromDate'];
            }
            
            if(isset($_POST['toDate'])){
                $toDate = $_POST['toDate'];
            }
            
            if(isset($_POST['reason'])){
                $reason = $_POST['reason'];
            }
            
            if(isset($_POST['application_date'])){
                $application_date = $_POST['application_date'];
            }

            if(isset($_POST['seletedLeave'])){
                $seletedLeave = $_POST['seletedLeave'];
            }
            
            $result = $leaveModel->updateLeave($employee_id,$seletedLeave);
            $result = $leaveModel->applyLeave($leaveType,$fromDate,$toDate,$reason,$application_date,$employee_id);

            if($result){
                echo json_encode(1);

            }else{
                echo json_encode(2);
            }
            exit();
        }else if($_GET['action'] == "logout"){
            
            unset($_SESSION['employee_access']);
			echo json_encode(1);
			exit();
		
        }else{
            
          echo "Unknown url.";
        }
        
    }
}else if(isset($_GET)){
	
} 
