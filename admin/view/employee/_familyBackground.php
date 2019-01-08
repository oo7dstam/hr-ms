
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
			<input class="form-control" type="text" id="s_last_name" name="s_last_name"  value="<?php echo (isset($employeeSpouse['last_name']))? $employeeSpouse['last_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="s_first_name" name="s_first_name" value="<?php echo (isset($employeeSpouse['first_name']))? $employeeSpouse['first_name']:""; ?>"/>
		</div>
	
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="s_middle_name" name="s_middle_name" value="<?php echo (isset($employeeSpouse['middle_name']))? $employeeSpouse['middle_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="s_extension" name="s_extension" value="<?php echo (isset($employeeSpouse['extension']))? $employeeSpouse['extension']:""; ?>"/>
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
			<input class="form-control" type="text" id="s_occupation" name="s_occupation"  value="<?php echo (isset($employeeSpouse['occupation']))? $employeeSpouse['occupation']:""; ?>"/>
		</div>
		
		<div class="col-md-6 form-group">
			<input class="form-control" type="text" id="s_employer_business_name" name="s_employer_business_name"  value="<?php echo (isset($employeeSpouse['employer_business_name']))? $employeeSpouse['employer_business_name']:""; ?>"/>
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
			<input class="form-control" type="text" id="s_business_address" name="s_business_address"  value="<?php echo (isset($employeeSpouse['business_address']))? $employeeSpouse['business_address']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="s_telephone_no" name="s_telephone_no"  value="<?php echo (isset($employeeSpouse['telephone_no']))? $employeeSpouse['telephone_no']:""; ?>"/>
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
			<?php
				if(isset($father['id'])){
					echo '<input type="hidden" name="f_parent_id" value="'. $father['id'].'"/>';
				}
			?>
			
			<input class="form-control" type="text" id="f_last_name" name="f_last_name"  value="<?php echo (isset($father['last_name']))? $father['last_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input  auto_focus class="form-control" type="text" id="f_first_name" name="f_first_name" value="<?php echo (isset($father['first_name']))? $father['first_name']:""; ?>"/>
		</div>
	
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="f_middle_name" name="f_middle_name" value="<?php echo (isset($father['middle_name']))? $father['middle_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="f_extension" name="f_extension" value="<?php echo (isset($father['extension']))? $father['extension']:""; ?>"/>
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
			<?php
				if(isset($mother['id'])){
					echo '<input type="hidden" name="m_parent_id" value="'. $mother['id'].'"/>';
				}
			?>
			<input class="form-control" type="text" id="m_last_name" name="m_last_name"  value="<?php echo (isset($mother['last_name']))? $mother['last_name']:""; ?>"/>
		</div>
		
		<div class="col-md-4 form-group">
			<input  auto_focus class="form-control" type="text" id="m_first_name" name="m_first_name" value="<?php echo (isset($mother['first_name']))? $mother['first_name']:""; ?>"/>
		</div>
	
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="m_middle_name" name="m_middle_name" value="<?php echo (isset($mother['middle_name']))? $mother['middle_name']:""; ?>"/>
			<input type="hidden" name="m_extension"/>
		</div>
		
		
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-4 form-group">
			<h4><b>Children :</b></h4>
			
		</div>
		<div class="col-md-8 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-children pull-right">Add Column</a>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="children_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Date of Birth</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="children_body">
					<?php if(!empty($children)){
							foreach($children as $child){
								
								echo '<tr>
				
									<td><div class="col-md-12" ><input type="hidden" name="child_id[]" class="form-control" value="'.$child['id'].'"/><input type="text" name="child_name[]" class="form-control" value="'.$child['full_name'].'"/></div></td>
									<td><div class="col-md-12" ><input type="text" name="child_birthday[]" class="form-control birth_date_table" value="'.$child['birthday'].'"/></div></td>
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-children" data-id="'.$child['id'].'"><i class="fa fa-trash"></i></a></td>
								</tr>';
							}
					} else {
						echo '<tr>
								<td><div class="col-md-12" ><input type="text" name="child_name[]" class="form-control" /></div></td>
								<td><div class="col-md-12" ><input type="text" name="child_birthday[]" class="form-control birth_date_table" /></div></td>
								<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-children" data-id="0" disabled><i class="fa fa-trash"></i></a></td>
							</tr>';
						
					}?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>