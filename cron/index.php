<?php 

header("Access-Control-Allow-Origin: * ");

header("Access-Control-Allow-Headers:  Origin, Content-Type, X-Auth-Token , Authorization");
header("Access-Control-Allow-Methods: GET ");


include '../lib/db.php'; 

include '../model/LeaveModel.php';
include '../model/ApplicantModel.php';
include '../model/EmployeeModel.php';

if($_GET['action'] == "getAllLeaveToday"){
  
  $modelLeave = new LeaveModel;

    
        //echo $_GET['callback']."(".json_encode(array('response'=>$modelLeave->getAllLeavesToday())).");";
        echo json_encode(array('response'=>$modelLeave->getAllLeavesToday()));
  
  
}else if($_GET['action'] == "getAllApplicant"){
  
  $modelApplicant = new ApplicantModel;

    
        //echo $_GET['callback']."(".json_encode(array('response'=>$modelLeave->getAllLeavesToday())).");";
        echo json_encode(array('response'=>$modelApplicant->getAllApplicant()));
  
  
}else if($_GET['action'] == "getAllEmployee"){
  
        $modelEmployee = new EmployeeModel;


        echo json_encode(array('response'=>$modelEmployee->getAllEmployeesForLocal()));
  
  
}

?>