
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="col-md-12">
			<h3>Family Background</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Spouse Information:</b></h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label>Surname</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>First Name</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>Middle Name</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>Name of Extension</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-3 form-group">
			<?php echo (isset($employeeSpouse['last_name']))? $employeeSpouse['last_name']:""; ?>
		</div>
		
		<div class="col-md-3 form-group">
			<?php echo (isset($employeeSpouse['first_name']))? $employeeSpouse['first_name']:""; ?>
		</div>
	
		<div class="col-md-3 form-group">
			<?php echo (isset($employeeSpouse['middle_name']))? $employeeSpouse['middle_name']:""; ?>
		</div>
		
		<div class="col-md-3 form-group">
			<?php echo (isset($employeeSpouse['extension']))? $employeeSpouse['extension']:""; ?>
		</div>

		
	</div>
	</br>
	
	<div class="row">
		
		<div class="col-md-6 form-group">
			<label>Occupation:</label>
		</div>
		<div class="col-md-6 form-group">
			<label>Employer/Business Name:</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-6 form-group">
			<?php echo (isset($employeeSpouse['occupation']))? $employeeSpouse['occupation']:""; ?>
		</div>
		
		<div class="col-md-6 form-group">
			<?php echo (isset($employeeSpouse['employer_business_name']))? $employeeSpouse['employer_business_name']:""; ?>
		</div>
	</div>
	</br>
	
	<div class="row">
		
		<div class="col-md-9 form-group">
			<label>Business Address:</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Telephone No. :</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-9 form-group">
			<?php echo (isset($employeeSpouse['business_address']))? $employeeSpouse['business_address']:""; ?>
		</div>
		
		<div class="col-md-3 form-group">
			<?php echo (isset($employeeSpouse['telephone_no']))? $employeeSpouse['telephone_no']:""; ?>
		</div>
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Fathers Information:</b></h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label>Surname</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>First Name</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>Middle Name</label>
		</div>
		
		<div class="col-md-3 form-group">
			<label>Name of Extension</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-3 form-group">
			<?php echo (isset($father['last_name']))? $father['last_name']:""; ?>
		</div>
		
		<div class="col-md-3 form-group">
			<?php echo (isset($father['first_name']))? $father['first_name']:""; ?>
		</div>
	
		<div class="col-md-3 form-group">
			<?php echo (isset($father['middle_name']))? $father['middle_name']:""; ?>
		</div>
		
		<div class="col-md-3 form-group">
			<?php echo (isset($father['extension']))? $father['extension']:""; ?>
		</div>

		
	</div>
	</br>
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Mothers Information:</b></h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4 form-group">
			<label>Surname</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>First Name</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Middle Name</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-4 form-group">
			<?php echo (isset($mother['last_name']))? $mother['last_name']:""; ?>
		</div>
		
		<div class="col-md-4 form-group">
			<?php echo (isset($mother['first_name']))? $mother['first_name']:""; ?>
		</div>
	
		<div class="col-md-4 form-group">
			<?php echo (isset($mother['middle_name']))? $mother['middle_name']:""; ?>
		</div>
		
		
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Children :</b></h4>
			
		</div>
	
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="children_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Date of Birth</th>
					</tr>
				</thead>
				<tbody id="children_body">
					<?php if(!empty($children)){
							foreach($children as $child){
								
								echo '<tr>
				
									<td><div class="col-md-12" >'.$child['full_name'].'</div></td>
									<td><div class="col-md-12" >'.$child['birthday'].'</div></td>
								</tr>';
							}
					} else {
						echo '<tr>
								<td colspan="2">No Found Result.</td>
							</tr>';
						
					}?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>