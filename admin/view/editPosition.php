<?php 

echo $id;
$modelCategories = new CategoriesModel();
$categoriesDetails = $modelCategories->getAllCategories();

$modelPostion = new CategoriesHasPositionModel();
$positionDetails = $modelPostion->getAllPositionById(array($id));
//$positionDetails = $modelPostion->getAllPosition();

$modelSalaryGrade = new SalaryGradeModel();
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
                <a href="./index.php?action=edit">Edit Position</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Position</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-10 col-md-10 col-lg-10">
                <form id="admin_form">
                    <?php 
                    if(!empty($positionDetails)){
                        //                                
                        foreach($positionDetails as $values ){
                            $id = $values['id'];
                            $name = $values['name'];
                            $position = $values['position'];
                            $salary_grade = $values['salary_grade'];
                            
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
                            <label>Position:</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                            <input class="form-control" type="text" name="position" id="position" value="<?php echo $position; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Current Category Name :</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="text" name="currentCategory" id="currentCategory" value="<?php echo $name; ?>" disabled/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Select New Category :</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <select class="form-control" type="text" name="category" id="category">
                                <?php 
                                foreach($categoriesDetails as $key=>$value)
                                {

                                    echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Current Salary :</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="text" name="currentSalary" id="currentSalary" value="<?php echo $salary_grade; ?>" disabled/>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Select New Salary :</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <select class="form-control" type="text" name="salary_grade" id="salary_grade">
                                <?php 
                                foreach($salaryGradeList as $key=>$value)
                                {

                                    echo '<option value="'.$value['id'].'">'.$value['salary_grade'].'</option>';
                                }
                                ?>
                            </select>
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
                            <a href="../admin/index.php?action=AddPosition" class="btn btn-danger pull-right">Cancel</a>

                        </div>
                    </div>
                </form>
            </div>
        </div><!--/.row-->
    </div>
</div>	<!--/.main-->
<?php

include './modal/successUpdatePosition.php';
include './modal/errorUpdatePosition.php';
include './modal/positionExist.php';
include './script/editPosition.php';
?>