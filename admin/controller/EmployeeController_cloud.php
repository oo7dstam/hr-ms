<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/EmployeeModel.php';
include '../model/EmployeeAccountModel.php';

$modelUser = new UserModel();
$modelEmployee = new EmployeeAccountModel();
// $modelLeave = new LeaveModel_cloud();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "save"){
			$result = $modelEmployee->addEmployee($_POST);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "update"){
			$result = $modelEmployee->updateEmployee($_POST);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "delete"){
			$result = $modelEmployee->deleteEmployee($_POST['id']);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "deactivate"){
            
            $id = null;
			$name = null;
			$email = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['id'])){
				$email = $_POST['email'];
			}
			
			$result = $modelEmployee->deactivate($id,$name,$email);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
            
        }else if($_GET['action'] == "activate"){
            
            $id = null;
			$name = null;
			$email = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['id'])){
				$email = $_POST['email'];
			}
			
			$result = $modelEmployee->activate($id,$name,$email);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
            
        }else if($_GET['action'] == "approved"){
            
            $id = null;
			$name = null;
			$email = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['id'])){
				$email = $_POST['email'];
			}
			
			$result = $modelEmployee->approved($id,$name,$email);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
            
        }else if($_GET['action'] == "cancelled"){
            
            $id = null;
			$name = null;
			$email = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['id'])){
				$email = $_POST['email'];
			}
			
			$result = $modelEmployee->cancelled($id,$name,$email);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
            
        }else if($_GET['action'] == "updateLeaveFromLocal"){

            $id = null;
            $disapproved_reason = null;
            $status =null;
            
            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }
            
            if(isset($_POST['status'])){
                $status = $_POST['status'];
            }
            
            if(isset($_POST['disapproved_reason'])){
                $disapproved_reason = $_POST['disapproved_reason'];
            }
            
            $params['id'] =$id;
            $params['reason']=$disapproved_reason;
            $params['status']=$status;

            $result = $modelLeave->updateLeaveFromLocal($params);

            if($result){
                echo json_encode(1);

            }else{
                echo json_encode(2);
            }

            exit();

        }
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
