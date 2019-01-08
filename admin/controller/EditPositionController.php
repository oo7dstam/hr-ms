<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/CategoriesHasPositionModel.php';

$modelPosition = new CategoriesHasPositionModel();

if(isset($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action'] == "update"){

            $id = null;
            $position = null;
            $category = null;
            $salary_grade = null;

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }

            if(isset($_POST['position'])){
                $position = $_POST['position'];
            }
            
            if(isset($_POST['category'])){
                $category = $_POST['category'];
            }
            
            if(isset($_POST['salary_grade'])){
                $salary_grade = $_POST['salary_grade'];
            }


            $result = $modelPosition->updatePosition($id,$position,$category,$salary_grade);

            echo json_encode($result);
            exit();
        }		

    }else{
        echo "Unknown url.";
    }
}else if(isset($_GET)){

} 
