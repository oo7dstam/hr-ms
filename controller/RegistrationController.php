<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/EmployeeModel.php';

$modelUser = new UserModel();
$modelEmployee = new EmployeeModel();
$modelRegistration = new EmployeeModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "registration"){
			$result = $modelRegistration->registration($_POST);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "applyLeave"){
			$result = $modelEmployee->applyLeave($_POST);
			
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
		}
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
