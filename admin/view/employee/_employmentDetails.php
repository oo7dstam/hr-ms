</br>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Department:</label>
			</div>
			<div class="col-md-3 form-group">
				<select class="form-control" type="text" id="category_id" name="category_id">
					<?php 
					
						echo "<option value=''>None</option>";
						foreach($categoriesDetails as $value){
							$selected = "";
							if(!empty($categoryDisplay) && isset($categoryDisplay['id'])){
								if($categoryDisplay['id'] == $value['id']){
									$selected = "selected";
								}
								
							}
							echo "<option value='".$value['id']."' ".$selected.">".$value['name']."</option>";
						}
						
					?>
					
				</select>
			</div>
		
			<div class="col-md-2 form-group">
				<label>Position:</label>
			</div>
			<div class="col-md-3 form-group">
				<select class="form-control" type="text" id="position_id" name="position_id">
					<?php 
						echo "<option value=''>None</option>";
						foreach($positionDetails as $value){
							$selected = "";
							if(!empty($employmentDetails) && isset($employmentDetails['position_id'])){
								if($employmentDetails['position_id'] == $value['id']){
									$selected = "selected";
								}
								
							}
							echo "<option value='".$value['id']."' ".$selected.">".$value['position']."</option>";
						}
					
						
					?>
					
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Date Hired:</label>
			</div>
			<div class="col-md-3 form-group">
				<input class="form-control" type="text" name="date_hired" id="date_hired"  value="<?php echo (isset($employmentDetails['date_hired']))? $employmentDetails['date_hired']:""; ?>"/>
			</div>
		</div>
		
	
</div>


<?php

	include 'script/_employee_details.php';
?>