<?php
	
	
	
	$admins = $modelAdmin->getAllAdmin(array('id'=>$currentUser['id']));
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="./index.php?action=Admin">User Management</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-10">
			
				<h1 class="page-header">Admins</h1>
			</div>
			<div class="col-lg-2">
				<br>
				<br>
				<a href="./index.php?action=addAdmin" class="btn btn-success">Add Admin</a>
			</div>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-hover">
					<thead>
						<colgroup>
							<colspan width="35%">
							<colspan width="35%">
							<colspan width="20%">
							<colspan width="10%">
						</colgroup>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Username</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if($admins){
								foreach($admins as $value){
									$status = "";
									$button = "";
									if($value['status']==1){
										$status ="<label class='label label-success'>Active</labe>";
										$button = "<a href='javascript:void(0)' class='btn btn-danger btn-inactive' data-id='".$value['id']."'><span class='fa fa-remove'></span></a>";
									}else if($value['status']==2){
										$status ="<label class='label label-danger'>Inactive</labe>";
										$button = "<a href='javascript:void(0)' class='btn btn-success btn-activate' data-id='".$value['id']."'><span class='fa fa-check'></span></a>";
									}
									
									
									
									echo "<tr>
										<td>".$value['name']."</td>
										<td>".$value['email']."</td>
										<td>".$value['username']."</td>
										<td>".$status."</td>
										<td>
											<a href='./index.php?action=updateAdmin&id=".$value['id']."' class='btn btn-primary'><span class='fa fa-pencil'></span></a>
											".$button."
											<!--<a href='javascript:void(0)' class='btn btn-info' data-id='".$value['id']."'><span class='fa fa-search'></span></a>
											<a href='javascript:void(0)' class='btn btn-danger btn-delete' data-id='".$value['id']."'><span class='fa fa-trash'></span></a>-->
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
			
		</div><!--/.row-->
	</div>	<!--/.main-->
	
<?php 
	include './modal/inactivateAdmin.php';
	include './modal/activateAdmin.php';
	include './modal/successAdminUpdate.php';
	include './modal/errorAdminUpdate.php';
	
	include './script/Admin.php';
?>
