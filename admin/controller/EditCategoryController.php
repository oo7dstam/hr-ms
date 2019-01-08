<?php 
session_start();
include '../components/dev.php';
include '../lib/db.php';
include '../model/CategoriesModel.php';

$modelCategories = new CategoriesModel();

if(isset($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action'] == "update"){
            
            $id = null;
            $name = null;

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }

            if(isset($_POST['name'])){
                $name = $_POST['name'];
            }
            
            
            $result = $modelCategories->updateCategories($id,$name);

            echo json_encode($result);
            exit();
        }		

    }else{
        echo "Unknown url.";
    }
}else if(isset($_GET)){

} 
