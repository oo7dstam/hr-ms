</br>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Rate per hour:</label>
			</div>
			<div class="col-md-2 form-group">
				<?php echo (isset($salaryDetails['rate']))? $salaryDetails['rate']:""; ?>
			</div>
			<div class="col-md-1 form-group">
				<label>Salary:</label>
			</div>
			<div class="col-md-5 form-group">
				<?php echo (isset($salaryDetails['salary']))? $salaryDetails['salary']:""; ?>
			</div>
		</div>
	
</div>