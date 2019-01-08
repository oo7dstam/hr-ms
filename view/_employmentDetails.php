</br>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Position:</label>
			</div>
			<div class="col-md-3 form-group">
					<?php 
						if(!empty($displayPositions)){
							echo $displayPositions['position'];
						}
					?>
					
			</div>
			<div class="col-md-2 form-group">
				<label>Department:</label>
			</div>
			<div class="col-md-3 form-group">
					<?php 
						if(!empty($displayCategories)){
							echo $displayCategories['name'];
						}
					?>
					
					
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Date Hired:</label>
			</div>
			<div class="col-md-5 form-group">
				<?php echo (isset($employmentDetails['date_hired']))? $employmentDetails['date_hired']:""; ?>
			</div>
		</div>
		
	
</div>