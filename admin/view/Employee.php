<?php
	
	
	$employeeModel = new EmployeeModel;
	
	$employees = $employeeModel->getAllEmployees(array());
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="./index.php?action=Employee">User Management</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-10">
			
				<h1 class="page-header">Employees</h1>
			</div>
			
			<div class="col-lg-2">
				<br>
				<br>
				<a href="./index.php?action=addEmployee" class="btn btn-success">Add Employee</a>
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
							<th>Employee ID</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Email Address</th>
							<th>Employment Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if(!empty($employees)){
								
								
								foreach($employees as $value){
									
									$status = "<span class='label label-success'>Regular</span>";
									$button ="";
									if($employeeModel::EMPLOYMENT_PROBITIONARY == $value['employment_status']){
										$status = "<span class='label label-primary'>PROBITIONARY</span>";
										$button ="<a href='javascript:void(0)' class='btn btn-success btn-regularization' data-employee_id='".$value['id']."' data-employment_id='".$value['employment_id']."'><span class='fa fa-check'></span></a>";
									}
									
									echo "<tr>
										<td>".$value['id']."</td>
										<td>".$value['first_name']."</td>
										<td>".$value['middle_name']."</td>
										<td>".$value['last_name']."</td>
										<td>".$value['email_address']."</td>
										<td>".$status."</td>
										<td>
											".$button."
											<a href='./index.php?action=viewEmployee&id=".$value['id']."' class='btn btn-primary'><span class='fa fa-search'></span></a>
											<a href='javascript:void(0)' class='btn btn-warning btn-invite' data-id='".$value['id']."' data-name='".$value['first_name']."' data-email='".$value['email_address']."'><span class='fa fa-envelope'></span></a>
											<a href='./index.php?action=updateEmployee&id=".$value['id']."' class='btn btn-primary'><span class='fa fa-pencil'></span></a>
											
											<a href='./index.php?action=generatePayroll&id=".$value['id']."' class='btn btn-success btn-generate-payroll' data-id='".$value['id']."'><span class='fa fa-money'></span></a>
											<a href='javascript:void(0)' class='btn btn-success btn-set-ob' data-id='".$value['id']."'><span class='fa fa-calendar'></span></a>
										</td>
									</tr>";
								}
							}else{
								echo "
									<tr>
										<td colspan='7'>No found result.</td>
									</tr>
								";
							}
						?>
					</tbody>
				</table>
			</div>
			</div>
                </div>
            </div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
<?php 
	include './modal/setOB.php';
	include './modal/inviteEmployee.php';
	include './modal/successInvitation.php';
	include './modal/errorInvitation.php';
	include './modal/regularizationEmployee.php';
	include './modal/successOB.php';
	include './modal/errorOB.php';
	include './modal/successRegularization.php';
	include './modal/errorRegularization.php';
	include './modal/loading.php';
	include './script/Employee.php';

?>	
