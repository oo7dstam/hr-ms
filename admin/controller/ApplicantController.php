<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/ApplicantModel.php';

$modelApplicant = new ApplicantModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "invite"){
			
			$id = null;
			$name = null;
			$email = null;
			$date = null;
			$status = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['email'])){
				$email = $_POST['email'];
			}
			
			if(isset($_POST['status'])){
				$status = $_POST['status'];
			}
			
			if(isset($_POST['date_interview'])){
				$date = $_POST['date_interview'];
			}
			
			
			$result = $modelApplicant->invite($id,$name,$email,$date,$status);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "saveData"){
		
			if(isset($_POST)){
				$return = $modelApplicant->saveData($_POST['response']);
				echo json_encode($return);
				exit();
			}
			
		}else if($_GET['action'] == "doneProcess"){
		
			if(isset($_POST)){
				$return = $modelApplicant->doneProcess($_POST['id']);
				echo json_encode($return);
				exit();
			}
			
		}
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
