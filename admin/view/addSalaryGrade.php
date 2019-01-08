<?php 

	$modelSalaryGrade = new SalaryGradeModel();
	$salaryGrades = $modelSalaryGrade->getAllSalaryGrade();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">Control Panel</a>
            </li>
            <li class="active">
                <a href="#">Salary Grade Details</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Salary Grade Details</h1>
        </div>
        <div class="col-lg-2">
				<br>
				<br>
				<a href="javascript:void(0)" class="btn btn-success btn-add-salary-grade">Add Salary Grade</a>
			</div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">            
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>                                
                                    <th>Salary Grade</th>
                                    <th>Step 1</th>                               
                                    <th>Step 2</th>                               
                                    <th>Step 3</th>                               
                                    <th>Step 4</th>                               
                                    <th>Step 5</th>                               
                                    <th>Step 6</th>                               
                                    <th>Step 7</th>                               
                                    <th>Step 8</th>                               
                                    <th>Action</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(!empty($salaryGrades)){
//                                		
                                        foreach($salaryGrades as $values ){
                                            echo "<tr>
                                                <td class='text-center'>".$values['salary_grade']."</td>
                                                <td class='text-center'>".$values['step1']."</td>
                                                <td class='text-center'>".$values['step2']."</td>
                                                <td class='text-center'>".$values['step3']."</td>
                                                <td class='text-center'>".$values['step4']."</td>
                                                <td class='text-center'>".$values['step5']."</td>
                                                <td class='text-center'>".$values['step6']."</td>
                                                <td class='text-center'>".$values['step7']."</td>
                                                <td class='text-center'>".$values['step8']."</td>
                                                <td class='text-center'>
                                                <a href='./index.php?action=editSalaryGrade&id=".$values['id']."' class='btn btn-primary btn-edit-category'  value='id'>
                                                <span class='fa fa-pencil'></span>
                                                </a>
                                                
                                                </td>
                                                </tr>";
                                        }
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>	<!--/.main-->
<?php
	include './modal/addSalaryGrade.php';
	include './modal/successAddSalaryGrade.php';
	include './modal/errorAddSalaryGrade.php';
	include './script/addSalaryGrade.php';
?>