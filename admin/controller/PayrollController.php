<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/PayrollModel.php';

$modelPayroll = new PayrollModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "generate"){
			$result = $modelPayroll->generatePayroll($_POST);
			
			echo json_encode($result);
			exit();
		}else if($_GET['action'] == "getAllAttendanceToday"){
			$result = array();
			if(isset($_POST['start_date']) && isset($_POST['end_date'])){
				$result = $modelPayroll->getAllAttendanceWithDate($_POST['start_date'],$_POST['end_date']);
				echo json_encode($result);
				
			}else{
				echo json_encode($result);
				
			}
			exit();
			
			
		}else if($_GET['action'] == "updateFromLocal"){
			if(isset($_POST['data'])){
				$result = $modelPayroll->updateFromLocal($_POST['data']);
			}
			
			
			echo json_encode(1);
			exit();
		}
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
