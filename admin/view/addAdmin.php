<?php 
	$adminDetails = $modelAdmin->getAdminDetails(array($id));
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li>
					<a href="./index.php?action=Admin">User Management</a>
				</li>
				<li class="active">
					<a href="./index.php?action=addAdmin">Add Admin</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin Details</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-10 col-md-10 col-lg-10">
					<form id="admin_form">
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Name:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="name" id="name" value="<?php echo (isset($adminDetails['name']))? $adminDetails['name']:""; ?>"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Email:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="email"  id="email" value="<?php echo (isset($adminDetails['email']))? $adminDetails['email']:""; ?>"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Username:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="username"  id="username" value="<?php echo (isset($adminDetails['username']))? $adminDetails['username']:""; ?>"/>
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
						
						<?php if($id != 0){ ?>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>New Password:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="password" id="new_password" name="new_password"  value=""/>
							</div>
						</div>
						<?php } ?>
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Confirm Password:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="password" id="confirm_password" name="confirm_password"  value=""/>
							</div>
						</div>
						
						<?php if($id != 0){ ?>
						<div class="row">
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
						</div>
						<?php } ?>
						
						
						<div class="row">
							<div class="col-md-12 form-group">
								<?php 
									if($action == "addAdmin"){ ?>
										<a href="javascript:void(0)" class="btn btn-primary pull-right btn-save">Save</a>
							<?php	}else{	?>
										<a href="javascript:void(0)" class="btn btn-primary pull-right btn-update">Update</a>
							<?php	} 
								?>
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

	include './modal/successSaveAdmin.php';
	include './modal/errorSaveAdmin.php';
	include './modal/usernameExist.php';
	include './script/addAdmin.php';
?>