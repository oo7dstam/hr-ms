<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/AdminModel.php';

$modelAdmin = new AdminModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "save"){
			$result = $modelAdmin->addAdmin($_POST);
			
			echo json_encode($result);
			exit();
		}else if($_GET['action'] == "update"){
			$result = $modelAdmin->updateAdmin($_POST);
			
			echo json_encode($result);
			exit();
		}else if($_GET['action'] == "delete"){
			$result = $modelAdmin->deleteAdmin($_POST['id']);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "inactive"){
			$result = $modelAdmin->inactiveAdmin($_POST['id']);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "active"){
			$result = $modelAdmin->activeAdmin($_POST['id']);
			
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
