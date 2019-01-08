<?php 
$modelSalaryGrade = new SalaryGradeModel();
$salaryGrades = $modelSalaryGrade->getAllSalaryGradeById(array($id));
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li>
                <a href="./index.php?action=AddSalaryGrade">Control Panel</a>
            </li>
            <li class="active">
                <a href="./index.php?action=editSalaryGrade">Edit Salary Grade</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Salary Grade</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-10 col-md-10 col-lg-10">
                <form id="admin_form">
                    <?php
                    if(!empty($salaryGrades)){
                        //                                		
                        foreach($salaryGrades as $values ){
                            $salaryGrade = $values['salary_grade'];
                            $step1 = $values['step1'];
                            $step2 = $values['step2'];
                            $step3 = $values['step3'];
                            $step4 = $values['step4'];
                            $step5 = $values['step5'];
                            $step6 = $values['step6'];
                            $step7 = $values['step7'];
                            $step8 = $values['step8'];
                        }
                    }


                    ?>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Salary Grade:</label>
                        </div>                        
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                            <input class="form-control" type="text" name="salary_grade" id="salary_grade" value="<?php echo $salaryGrade; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 1:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_1" value="<?php echo $step1; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 2:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_2" value="<?php echo $step2; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 3:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_3" value="<?php echo $step3; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 4:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_4" value="<?php echo $step4; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 5:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_5" value="<?php echo $step5; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 6:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_6" value="<?php echo $step6; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 7:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_7" value="<?php echo $step7; ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Step 8:</label>
                        </div>                        
                        <div class="col-md-8 form-group">                            
                            <input class="form-control" type="text" name="name" id="step_8" value="<?php echo $step8; ?>"/>
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
                            <a href="../admin/index.php?action=AddSalaryGrade" class="btn btn-danger pull-right">Cancel</a>

                        </div>
                    </div>
                </form>
            </div>
        </div><!--/.row-->
    </div>
</div>	<!--/.main-->
<?php
    include './modal/salaryGradeExist.php';
    include './modal/successUpdateSalaryGrade.php';
    include './modal/errorUpdateSalaryGrade.php';
    include './script/editSalaryGrade.php';
?>