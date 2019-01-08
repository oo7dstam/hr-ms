<?php 


?>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
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
			<input class="form-control" type="text" id="last_name" name="last_name"  value="<?php echo (isset($employeeDetails['last_name']))? $employeeDetails['last_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input  auto_focus class="form-control" type="text" id="first_name" name="first_name" value="<?php echo (isset($employeeDetails['first_name']))? $employeeDetails['first_name']:""; ?>"/>
		</div>
	
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="middle_name" name="middle_name" value="<?php echo (isset($employeeDetails['middle_name']))? $employeeDetails['middle_name']:""; ?>"/>
		</div>
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="extension" name="extension" value="<?php echo (isset($employeeDetails['extension']))? $employeeDetails['extension']:""; ?>"/>
		</div>

		
	</div>
	</br>
	
	<div class="row">
		
		<div class="col-md-3 form-group">
			<label>Birthday:</label>
		</div>
		<div class="col-md-9 form-group">
			<label>Place of Birthday:</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="birthday" name="birthday"  value="<?php echo (isset($employeeDetails['birthday']))? $employeeDetails['birthday']:""; ?>"/>
		</div>
		
		<div class="col-md-9 form-group">
			<input class="form-control" type="text" id="place_of_birth" name="place_of_birth"  value="<?php echo (isset($employeeDetails['place_of_birth']))? $employeeDetails['place_of_birth']:""; ?>"/>
		</div>
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-2 form-group">
			<label>Sex:</label>
		</div>
		
		<div class="col-md-2 form-group">
			<label>Civil Status:</label>
		</div>
		
		<div class="col-md-2 form-group">
			<label>Citizenship:</label>
		</div>
		<div class="col-md-2 form-group">
			
		</div>
		<div class="col-md-4 form-group">
			<label>Indicate Country:</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-2 form-group">
			<select class="form-control" id="sex" name="sex">
				<?php 
				
					$male= "";
					$female= "";
						
					if(isset($employeeDetails['sex'])){
						
						if($employeeDetails['sex'] == 1){
							$male= "selected";
						}else if($employeeDetails['sex'] == 2){
							$female= "selected";
						}
						
					}
					echo "
						<option value=''>None</option>
						<option ".$male." value='1'>Male</option>
						<option ".$female." value='2'>Female</option>
						";
				?>
				
			</select>
		</div>
	
		<div class="col-md-2 form-group">
			<select class="form-control" id="civil_status" name="civil_status">
				<?php 
					$single= "";
					$married= "";
					$widowed= "";
					$separated= "";
						
					if(isset($employeeDetails['civil_status'])){
						
						if($employeeDetails['civil_status'] == 1){
							$single= "selected";
						}else if($employeeDetails['civil_status'] == 2){
							$married= "selected";
						}else if($employeeDetails['civil_status'] == 3){
							$widowed= "selected";
						}else if($employeeDetails['civil_status'] == 4){
							$separated= "selected";
						}
						
					}
					echo "
						<option value=''>None</option>
						<option ".$single." value='1'>Single</option>
						<option ".$married." value='2'>Married</option>
						<option ".$widowed." value='3'>Widowed</option>
						<option ".$separated." value='4'>Separated</option>
						";
				?>
				
			</select>
		</div>
	
		<div class="col-md-2 form-group">
			<select class="form-control" id="citizenship" name="citizenship">
				<?php 
					$filipino= "";
					$dual= "";
					
					if(isset($employeeDetails['citizenship'])){
						
						
						if($employeeDetails['citizenship'] == 1){
							$filipino= "selected";
							
						}else if($employeeDetails['citizenship'] == 2){
							$dual= "selected";
						}
						
					}
					
					echo "
						<option value=''>None</option>
						<option ".$filipino." value='1'>Filipino</option>
						<option ".$dual." value='2'>Dual Citizenship</option>
						";
				?>
				
			</select>
		</div>
		<div class="col-md-2">
			<select class="form-control" name="dual_citizen" id="dual_citizen">
				<?php 
					if(isset($employeeDetails['dual_citizen'])){
						$byBirth= "";
						$byNeutralization= "";
						if($employeeDetails['dual_citizen'] == 1){
							$byBirth= "selected";
						}else if($employeeDetails['dual_citizen'] == 2){
							$byNeutralization= "selected";
						}
						
					}
					echo "
						<option value=''>None</option>
						<option ".$byBirth." value='1'>By Birth</option>
						<option ".$byNeutralization." value='2'>By Neutralization</option>
						";
				?>
			</select>
			
		</div>
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="dual_citizen_country" name="dual_citizen_country"  value="<?php echo (isset($employeeDetails['dual_citizen_country']))? $employeeDetails['dual_citizen_country']:""; ?>"/>
		</div>
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-4 form-group">
			<label>Height(cm):</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Weight (kg):</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Blood Type :</label>
		</div>
		
	</div>
	<div class="row">
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="height" name="height"  value="<?php echo (isset($employeeDetails['height']))? $employeeDetails['height']:""; ?>"/>
		</div>
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="weight" name="weight"  value="<?php echo (isset($employeeDetails['weight']))? $employeeDetails['weight']:""; ?>"/>
		</div>
		<div class="col-md-4 form-group">
			<select class="form-control" id="blood_type" name="blood_type">
				<?php 
					$typeO= "";
					$typeA= "";
					$typeB= "";
					$typeAB= "";
					
					if(isset($employeeDetails['blood_type'])){
						
						if($employeeDetails['blood_type'] == 1){
							$typeO= "selected";
						}else if($employeeDetails['blood_type'] == 2){
							$typeA= "selected";
						}else if($employeeDetails['blood_type'] == 3){
							$typeB= "selected";
						}else if($employeeDetails['blood_type'] == 4){
							$typeAB= "selected";
						}
						
					}
					echo "
						<option value=''>None</option>
						<option ".$typeO." value='1'>Type O</option>
						<option ".$typeA." value='2'>Type A</option>
						<option ".$typeB." value='2'>Type B</option>
						<option ".$typeAB." value='2'>Type AB</option>
						";
				?>
				
			</select>
		</div>
	</div>
	</br>
	<div class="row">
		<div class="col-md-4 form-group">
			<label>GSIS ID No. :</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Pag Ibig ID No. :</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Philhealth No. :</label>
		</div>
		
	</div>
	<div class="row">
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="gsis_no" name="gsis_no"  value="<?php echo (isset($employeeDetails['gsis_no']))? $employeeDetails['gsis_no']:""; ?>"/>
		</div>
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="pag_ibig_no" name="pag_ibig_no"  value="<?php echo (isset($employeeDetails['pag_ibig_no']))? $employeeDetails['pag_ibig_no']:""; ?>"/>
		</div>
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="phil_health_no" name="phil_health_no"  value="<?php echo (isset($employeeDetails['phil_health_no']))? $employeeDetails['phil_health_no']:""; ?>"/>
		</div>

	</div>
	</br>
	<div class="row">
		
		<div class="col-md-4 form-group">
			<label>SSS No. :</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>TIN No. :</label>
		</div>
		
		<div class="col-md-4 form-group">
			<label>Agency Employee No. :</label>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="sss_no" name="sss_no"  value="<?php echo (isset($employeeDetails['sss_no']))? $employeeDetails['sss_no']:""; ?>"/>
		</div>
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="tin_no" name="tin_no"  value="<?php echo (isset($employeeDetails['tin_no']))? $employeeDetails['tin_no']:""; ?>"/>
		</div>
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="agency_employee_no" name="agency_employee_no"  value="<?php echo (isset($employeeDetails['agency_employee_no']))? $employeeDetails['agency_employee_no']:""; ?>"/>
		</div>
	</div>
	</br>
	
	
	<div class="row">
		<div class="col-md-4 form-group">
			<label>Telephone No. :</label>
		</div>
		<div class="col-md-4 form-group">
			<label>Mobile No. :</label>
		</div>
		<div class="col-md-4 form-group">
			<label>Email :</label>
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="telephone_no" name="telephone_no"  value="<?php echo (isset($employeeDetails['telephone_no']))? $employeeDetails['telephone_no']:""; ?>"/>
		</div>
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="mobile_no" name="mobile_no"  value="<?php echo (isset($employeeDetails['mobile_no']))? $employeeDetails['mobile_no']:""; ?>"/>
		</div>
		<div class="col-md-4 form-group">
			<input class="form-control" type="text" id="email_address" name="email_address"  value="<?php echo (isset($employeeDetails['email_address']))? $employeeDetails['email_address']:""; ?>"/>
		</div>
		
	</div>
	</br>
	
	
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Residential Address:</b></h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label>House/Block/Lot No. :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Street :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Subdivision/Village :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Barangay :</label>
		</div>

	</div>
	<div class="row">
		
		<div class="col-md-3 form-group">
			<?php 
				if(isset($address1['id'])){
					echo '<input class="form-control" type="hidden" name="address_id[]" value="'.$address1['id'].'"/>';
				}
			?>
			
			<input class="form-control" type="hidden" name="house_type[]" value="1"/>
			<input class="form-control" type="text" id="house_no_1" name="house_no[]"  value="<?php echo (isset($address1['house_no']))? $address1['house_no']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="street_1" name="street[]"  value="<?php echo (isset($address1['street']))? $address1['street']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="subdivision_1" name="subdivision[]"  value="<?php echo (isset($address1['subdivision']))? $address1['subdivision']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="barangay_1" name="barangay[]"  value="<?php echo (isset($address1['barangay']))? $address1['barangay']:""; ?>"/>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-5 form-group">
			<label>City/Municipality. :</label>
		</div>
		<div class="col-md-5 form-group">
			<label>Province :</label>
		</div>
		<div class="col-md-2 form-group">
			<label>Zip Code :</label>
		</div>
		
	</div>
	<div class="row">
		
		<div class="col-md-5 form-group">
			<input class="form-control" type="text" id="municipality_1" name="municipality[]"  value="<?php echo (isset($address1['municipality']))? $address1['municipality']:""; ?>"/>
		</div>
		<div class="col-md-5 form-group">
			<input class="form-control" type="text" id="province_1" name="province[]"  value="<?php echo (isset($address1['province']))? $address1['province']:""; ?>"/>
		</div>
		<div class="col-md-2 form-group">
			<input class="form-control" type="text" id="zip_code_1" name="zip_code[]"  value="<?php echo (isset($address1['zip_code']))? $address1['zip_code']:""; ?>"/>
		</div>
		
	</div>
	</br>
	<div class="row">
		<div class="col-md-12 form-group">
			<h4><b>Permanent Address:</b></h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label>House/Block/Lot No. :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Street :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Subdivision/Village :</label>
		</div>
		<div class="col-md-3 form-group">
			<label>Barangay :</label>
		</div>

	</div>
	<div class="row">
		
		<div class="col-md-3 form-group">
			<?php 
				if(isset($address2['id'])){
					echo '<input class="form-control" type="hidden" name="address_id[]" value="'.$address2['id'].'"/>';
				}
			?>
			<input class="form-control" type="hidden" name="house_type[]" value="2"/>
			<input class="form-control" type="text" id="house_no_2" name="house_no[]"  value="<?php echo (isset($address2['house_no']))? $address2['house_no']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="street_2" name="street[]"  value="<?php echo (isset($address2['street']))? $address2['street']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="subdivision_2" name="subdivision[]"  value="<?php echo (isset($address2['subdivision']))? $address2['subdivision']:""; ?>"/>
		</div>
		<div class="col-md-3 form-group">
			<input class="form-control" type="text" id="barangay_2" name="barangay[]"  value="<?php echo (isset($address2['barangay']))? $address2['barangay']:""; ?>"/>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-5 form-group">
			<label>City/Municipality. :</label>
		</div>
		<div class="col-md-5 form-group">
			<label>Province :</label>
		</div>
		<div class="col-md-2 form-group">
			<label>Zip Code :</label>
		</div>
		
	</div>
	<div class="row">
		
		<div class="col-md-5 form-group">
			<input class="form-control" type="text" id="municipality_2" name="municipality[]"  value="<?php echo (isset($address2['municipality']))? $address2['municipality']:""; ?>"/>
		</div>
		<div class="col-md-5 form-group">
			<input class="form-control" type="text" id="province_2" name="province[]"  value="<?php echo (isset($address2['province']))? $address2['province']:""; ?>"/>
		</div>
		<div class="col-md-2 form-group">
			<input class="form-control" type="text" id="zip_code_2" name="zip_code[]"  value="<?php echo (isset($address2['zip_code']))? $address2['zip_code']:""; ?>"/>
		</div>
		
	</div>
	</br>
	
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<div id="myDropZone" class="dropzone">
			</div>
			<div class="col-sm-12 text-center">	
				<label class="text-danger">Upload 2x2 image</label>
			</div>
		</div>
	</div>
	
</div>