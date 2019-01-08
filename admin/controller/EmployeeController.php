<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/EmployeeModel.php';
include '../model/FileuploadModel.php';

$modelUser = new UserModel();
$modelEmployee = new EmployeeModel();
$modelFileUpload = new FileuploadModel();

if(isset($_GET)){
	if(isset($_GET['action']) && !empty($_GET['action'])){
		
		if($_GET['action'] == "save"){
			$result = $modelEmployee->addEmployee($_POST);
			$return = array();
			// if($result){
				
				echo json_encode($result);
				
			// }else{
				// echo json_encode(2);
			// }
			
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
		}else if($_GET['action'] == "invite"){
			
			$id = null;
			$name = null;
			$email = null;
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
			if(isset($_POST['name'])){
				$name = $_POST['name'];
			}
			
			if(isset($_POST['email'])){
				$email = $_POST['email'];
			}
			
			$result = $modelEmployee->invite($id,$name,$email);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "regularization"){
			
			$id = null;
			$employee_id = null;
			
			if(isset($_POST['employee_id'])){
				$employee_id = $_POST['employee_id'];
			}
	
			if(isset($_POST['employment_id'])){
				$id = $_POST['employment_id'];
			}
	
			$result = $modelEmployee->regularization($id,$employee_id);
			
			if($result){
				echo json_encode(1);
				
			}else{
				echo json_encode(2);
			}
			
			exit();
		}else if($_GET['action'] == "getEmployeeSalary"){
			
			$id = 0;
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			$result = $modelEmployee->getEmployeeSalaryDetails(array($id));
			echo json_encode($result);
			
			exit();
		}else if($_GET['action'] == "saveEmployeeData"){
			
			if(isset($_POST['response'])){
				$modelEmployee->insertToLocal($_POST['response']);
			}
			
			echo json_encode(1);
			
			exit();
		}else if($_GET['action'] == "upload"){
			
			$target_dir = "../uploads/profiles/";
			$temp = array();
			$lastInsertedId = $modelEmployee->getEmployeeLastID();

			if (!file_exists($target_dir)) {

				mkdir($target_dir, 0777, true);

			}
			
			if (isset($_FILES['file']) && !empty($_FILES['file'])) {

				$temp = $_FILES['file']['tmp_name'];

			}

			$arrayToUpload =array();
			$return = array();
			foreach ($_FILES['file']['name'] as $key => $name) {

				$target_file = $target_dir . basename($name);
				
				

				if (move_uploaded_file($temp[$key], $target_dir . time() . $key . $name)) {
					
					$fileName = time() . $key . $name;
					
					$arrayToUpload = array(
							'file_name'=>$fileName,
							'target_dir'=>$target_dir,
							'name'=>$name,
							'id'=>$lastInsertedId['id'],
						);
						
					/* if(!empty($_POST['id_product_image'])){
						$arrayToUpload[] = array(
								'file_name'=>$fileName,
								'target_dir'=>$target_dir,
								'name'=>$name,
								'id'=>$_POST['id_product_image'],
								);
					}else{
						$arrayToUpload[] = array(
								'file_name'=>$fileName,
								'target_dir'=>$target_dir,
								'name'=>$name,
								'id'=>$lastInsertedId,
								);
					} */
					
				   

				}

			}
			
			$return = $modelFileUpload->uploadProfileImage($arrayToUpload);
			
			
			echo json_encode($return);

		}
		
		
		
	}else{
		echo "Unknown url.";
	}
}else if(isset($_GET)){
	
} 
