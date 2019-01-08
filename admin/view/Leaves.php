<?php
	
	
	
	$leaves = $modelLeaves->getAllLeaves(array());
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="./index.php?action=Leaves">Leaves</a>
					<div id="display"></div>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-10">
			
				<h1 class="page-header">Leaves</h1>
			</div>
			<div class="col-lg-2">
				<br>
				<br>
				<a href="javascript:void(0)" class="btn btn-success btn-pull-data">Pull Data</a>
			</div>
		</div><!--/.row-->
		
		
		
		
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-hover">
					<thead>
						<colgroup>
							<colspan width="10%">
							<colspan width="20%">
							<colspan width="20%">
							<colspan width="20%">
							<colspan width="10%">
							<colspan width="10%">
							<colspan width="10%">
						</colgroup>
						<tr>
							<th>Employee ID</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Date Start</th>
							<th>Date End</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if(!empty($leaves)){
								
								foreach($leaves as $value){
									$button = "";
									$status = "<span class='label label-primary'>CANCELLED</span>";
									if( $value['leave_status'] == $modelLeaves::STATUS_APPROVED){
										$status = "<span class='label label-success'>APPROVED</span>";
									}else if( $value['leave_status'] == $modelLeaves::STATUS_DISAPPROVED){
										$status = "<span class='label label-danger'>DISAPPROVED</span>";
									}else if( $value['leave_status'] == $modelLeaves::STATUS_PENDING){
										$status = "<span class='label label-warning'>PENDING</span>";
										$button = "<a href='javascript:void(0)' class='btn btn-success btn-approve' data-id='".$value['leave_id']."'><span class='fa fa-check'>&nbsp;Approve</span></a>
											<a href='javascript:void(0)' class='btn btn-danger btn-disapprove' data-id='".$value['leave_id']."'><span class='fa fa-remove'>&nbsp;Disapprove</span></a>";
									}
									
									echo "<tr>
										<td>".$value['employee_id']."</td>
										<td>".$value['first_name']."</td>
										<td>".$value['middle_name']."</td>
										<td>".$value['last_name']."</td>
										<td>".$value['from_date']."</td>
										<td>".$value['to_date']."</td>
										<td>".$status."</td>
										<td>
											".$button."
										</td>
									</tr>";
								}
							}else{
								echo "
									<tr>
										<td colspan='8'>No found result.</td>
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
			
		
		include './modal/successSaveData.php';
		include './modal/confirmApprove.php';
		include './modal/confirmDisapprove.php';
		include './modal/successDisapprove.php';
		include './modal/errorDisapprove.php';
		include './modal/successApprove.php';
		include './modal/errorApprove.php';
		include './modal/loading.php';
		include './script/leaves.php';
	?>
