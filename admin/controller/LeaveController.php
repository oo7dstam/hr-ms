<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/LeavesModel.php';

$modelLeave = new LeavesModel();
if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		if($_GET['action'] == "saveData"){
		
			if(isset($_POST)){
				// Dev::pvx($_POST['response']);
				$return = $modelLeave->saveData($_POST['response']);
				echo json_encode($return);
				exit();
			}
			
		}else if($_GET['action'] == "approve"){
		
			if(isset($_POST)){
				$return = $modelLeave->approve($_POST['id']);
				echo json_encode($return);
				
				exit();
			}
			
		}else if($_GET['action'] == "disapprove"){
		
			if(isset($_POST)){
				$return = $modelLeave->disapprove($_POST['id']);
				
				echo json_encode($return);
				exit();
			}
			
		}else if($_GET['action'] == "setOB"){
		
			if(isset($_POST)){
				$return = $modelLeave->setOB($_POST);
				
				echo json_encode($return);
				exit();
			}
			
		}
		
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
