<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/SalaryGradeModel.php';

$modelSalaryGrade = new SalaryGradeModel();

if(isset($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action'] == "update"){

            $id = null;
            $name = null;

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }

            if(isset($_POST['salary_grade'])){
                $salary_grade = $_POST['salary_grade'];
            }
            
            if(isset($_POST['step1'])){
                $step1 = $_POST['step1'];
            }
            
            if(isset($_POST['step2'])){
                $step2= $_POST['step2'];
            }
            
            if(isset($_POST['step3'])){
                $step3 = $_POST['step3'];
            }
            
            if(isset($_POST['step4'])){
                $step4 = $_POST['step4'];
            }
            
            if(isset($_POST['step5'])){
                $step5= $_POST['step5'];
            }
            
            if(isset($_POST['step6'])){
                $step6 = $_POST['step6'];
            }
            
            if(isset($_POST['step7'])){
                $step7= $_POST['step7'];
            }
            
            if(isset($_POST['step8'])){
                $step8 = $_POST['step8'];
            }


            $result = $modelSalaryGrade->updateSalaryGrade($id,$salary_grade,$step1,$step2,$step3,$step4,$step5,$step6,$step7,$step8);

            echo json_encode($result);
            exit();
        }		

    }else{
        echo "Unknown url.";
    }
}else if(isset($_GET)){

} 
