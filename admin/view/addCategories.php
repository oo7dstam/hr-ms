<?php 

	// $employeeAccountModel = new EmployeeAccountModel;	
	// $allEmployeeAccount = $employeeAccountModel->getEmployeeAccount(array($id));

	$modelCategory = new CategoriesModel();
	
	$categoryDetails = 	$modelCategory->getAllCategories(array($id));
	
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
                <a href="./index.php?action=Employee">Category Details</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Category Details</h1>
        </div>
        <div class="col-lg-2">
				<br>
				<br>
				<a href="javascript:void(0)" class="btn btn-success btn-add-category">Add Category</a>
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
                                    <th>Category Name</th>                               
                                    <th>Action</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(!empty($categoryDetails)){
            //                                
                                        foreach($categoryDetails as $values ){
                                            $status = "";                               

                                            echo "<tr>
                                                <td class='text-center'>".$values['name']."</td>
                                                <td class='text-center'>
                                                <a href='./index.php?action=editCategory&id=".$values['id']."' class='btn btn-primary btn-edit-category'  value='id'>
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
</div>  <!--/.main-->

<?php
	include './modal/addCategory.php';
	include './modal/successAddCategories.php';
	include './modal/errorAddCategories.php';
	include './script/addCategories.php';
?>