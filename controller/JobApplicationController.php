<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
//include '../model/UserModel.php';

$modelApplicant = new UserModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "job_application"){
			$result = $modelApplicant->job_application($_POST);
			
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
