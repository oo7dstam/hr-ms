</br>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-md-2 form-group">
				<label>GSIS:</label>
			</div>
			<div class="col-md-4 form-group">
				<?php echo (isset($salaryDetails['sss']))? $salaryDetails['sss']:""; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Phil Health:</label>
			</div>
			<div class="col-md-4 form-group">
				<?php echo (isset($salaryDetails['phil_health']))? $salaryDetails['phil_health']:""; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 form-group">
				<label>Pag ibig:</label>
			</div>
			<div class="col-md-4 form-group">
				<?php echo (isset($salaryDetails['pag_ibig']))? $salaryDetails['pag_ibig']:""; ?>
			</div>
		</div>
	
</div>
