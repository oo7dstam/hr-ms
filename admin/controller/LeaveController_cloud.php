<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/UserModel.php';
include '../model/LeaveModel_cloud.php';

$modelLeave = new LeaveModel_cloud();

if(isset($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action'] == "approvedLeave"){
            
            $id = null;
            $leaveAction = null;
            $comment = null;

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }

            if(isset($_POST['leaveAction'])){
                $leaveAction = $_POST['leaveAction'];
            }

            if(isset($_POST['comment'])){
                $comment = $_POST['comment'];
            }

            $result = $modelLeave->approvedLeave($id,$leaveAction,$comment);

            if($result){
                echo json_encode(1);

            }else{
                echo json_encode(2);
            }

            exit(); 
        }else if($_GET['action'] == "disapprovedLeave"){
            $id = null;
            $leaveAction = null;
            $comment = null;

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }

            if(isset($_POST['leaveAction'])){
                $leaveAction = $_POST['leaveAction'];
            }

            if(isset($_POST['comment'])){
                $comment = $_POST['comment'];
            }

            $result = $modelLeave->disapprovedLeave($id,$leaveAction,$comment);

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
