<?php 

    echo $id;
    $modelCategory = new CategoriesModel();
    $modelSalaryGrade = new SalaryGradeModel();
    $categoryDetails = 	$modelCategory->getAllCategories();
    $categoryDetailsById = 	$modelCategory->getAllCategoriesById(array($id));
    $salaryGradeList = 	$modelSalaryGrade->getAllSalaryGrade();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li>
                <a href="./index.php?action=AddCategories">Control Panel</a>
            </li>
            <li class="active">
                <a href="./index.php?action=edit">Edit Category</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Category</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-10 col-md-10 col-lg-10">
                <form id="admin_form">
                    <?php 
                    if(!empty($categoryDetailsById)){
                        //                                
                        foreach($categoryDetailsById as $values ){
                            $name = $values['name'];
                            $id = $values['id'];
                        }
                    }else{
                        echo "
                                <tr>
                                    <td colspan='7'>No found result.</td>
                                </tr>
                            ";
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Category Name:</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="hidden" name="name" id="id" value="<?php echo $id; ?>"/>
                            <input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>"/>
                        </div>
                    </div>                    

                    <?php if($id != 0){ ?>
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    </div>
                    <?php } ?>


                    <div class="row">
                        <div class="col-md-12 form-group">
                           
                            <a href="javascript:void(0)" class="btn btn-primary pull-right btn-update">Update</a>
                           
                            <span class="pull-right">&nbsp;</span>
                            <a href="../admin/index.php?action=AddCategories" class="btn btn-danger pull-right">Cancel</a>

                        </div>
                    </div>
                </form>
            </div>
        </div><!--/.row-->
    </div>
</div>	<!--/.main-->
<?php

include './modal/successUpdateCategories.php';
include './modal/errorUpdateCategories.php';
include './modal/categoriesExist.php';
include './script/editCategory.php';
?>