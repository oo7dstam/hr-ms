<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/SalaryGradeModel.php';

$modelSalaryGrade = new SalaryGradeModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "save"){
			$result = $modelSalaryGrade->save($_POST);
			
			echo json_encode($result);
			exit();
		}
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
