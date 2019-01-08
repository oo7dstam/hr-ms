<?php
	
//	$modelEmployee = new EmployeeModel;
//
//    $employeeDetails = $modelEmployee->getEmployeeDetails(array($id));
	
//	$ifExistModel = new EmployeeModel;
//	
//	$IfExist = $ifExistModel->IfExist(array());

?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header text-center">Register Employee</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-10 col-md-10 col-lg-10">
					<form id="registration_form">
                        
								<input class="form-control" type="hidden" name="id"  id="id" 
                                       value="<?php echo $action?>"/ disabled>
						
					   
								<input class="form-control" type="hidden" name="employee_id"  id="employee_id" value="<?php echo $id?>"/ disabled>
							   
                        
								<input class="form-control" type="hidden" name="name"  id="name" value="<?php echo $name?>"/ disabled>
							
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Username:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="username"  id="username" value=""/>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Email Address:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="email"  id="email" value=""/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Password:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="password"  id="password" name="password"  value=""/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Confirm Password:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="password"  id="confirm_password" name="confirm_password"  value=""/>
							</div>
						</div>
						
						
						<?php if($id != 0){ ?>
						<div class="row">
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
						</div>
						<?php } ?>
						
						
						<div class="row">
							<div class="col-md-12 form-group">
								
								<a href="javascript:void(0)" class="btn btn-primary pull-right btn-registration">Save</a>							
								<span class="pull-right">&nbsp;</span>
								<a href="../admin/index.php?action=Admin" class="btn btn-danger pull-right">Cancel</a>
								
							</div>
						</div>
					</form>
				</div>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->

<?php
	include './includes/footer.php'; 
	include './modal/successRegister.php';
	include './modal/errorRegistration.php';
	include './script/registration.php';
?>
	
