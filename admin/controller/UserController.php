<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/EmployeeModel.php';

$modelUser = new UserModel();
$modelEmployee = new EmployeeModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "authenticate"){
			
			$modelUser->authenticate($_POST);
		}else if($_GET['action'] == "logout"){
			
            unset($_SESSION['admin_access']);
			echo json_encode(1);
			exit();
		
		}
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 




