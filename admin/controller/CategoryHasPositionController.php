<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/CategoriesHasPositionModel.php';

$modelcategorieshasposition = new CategoriesHasPositionModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "save"){
			$result = $modelcategorieshasposition->addPosition($_POST);
			
			echo json_encode($result);
			exit();
		}else if($_GET['action'] == "getAllBaseOnCategoryPosition"){
			$result = $modelcategorieshasposition->getAllBaseOnCategoryPosition(array($_POST['id']));
			
			echo json_encode($result);
			exit();
		}		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
