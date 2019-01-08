<?php 
	$modelCategories = new CategoriesModel();
	$categoriesDetails = $modelCategories->getAllCategories();

	$modelPostion = new CategoriesHasPositionModel();
	$positionDetails = $modelPostion->getAllPosition();
	
	$modelSalaryGrade = new SalaryGradeModel();
	$salaryGradeList = 	$modelSalaryGrade->getAllSalaryGrade();
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
                <a href="./index.php?action=Employee">Position Details</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Position Details</h1>
        </div>
        <div class="col-lg-2">
				<br>
				<br>
				<a href="javascript:void(0)" class="btn btn-success btn-add-position">Add Position</a>
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
                                    <th>No.</th>
                                    <th>Position</th>                               
                                    <th>Category Name</th>                               
                                    <th>Salary Grade</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(!empty($positionDetails)){
//                                
                                        foreach($positionDetails as $values ){
                                            $status = "";                               

                                            echo "<tr>
                                                <td class='text-center'>".$values['id']."</td>
                                                <td class='text-center'>".$values['position']."</td>
                                                <td class='text-center'>".$values['name']."</td>
                                                <td class='text-center'>".$values['salary_grade']."</td>
                                                <td class='text-center'>
                                                <a href='./index.php?action=editPosition&id=".$values['id']."' class='btn btn-primary btn-edit-category'  value='id'>
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
	include './modal/addPosition.php';
	include './modal/successAddPosition.php';
	include './modal/errorAddPosition.php';
	include './script/addPosition.php';
?>