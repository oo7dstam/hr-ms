<?php 
	$employeeDetails = $modelEmployee->getEmployeeSalaryDetails(array($id));
	
	$allEmployeeNames = array();
	if($id == 0){
		$allEmployeeNames = $modelEmployee->getAllEmployeeNames();
	}
	
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li>
					<a href="./index.php?action=Admin">Payroll</a>
				</li>
				<li class="active">
					<a href="./index.php?action=generatePayroll">Generate Payroll</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Payroll Details</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-10 col-md-10 col-lg-10">
					<form id="payroll_form">
						<?php 
							$salary =0;
							$rate =0;
							if(isset($employeeDetails['salary'])){
								$salary = $employeeDetails['salary'];
							}
							
							if(isset($employeeDetails['rate'])){
								$rate = $employeeDetails['rate'];
							}
							echo '<input type="hidden" id="salary" name="salary" value="'.$salary.'" />';
							echo '<input type="hidden" id="rate" name="rate" value="'.$rate.'" />';
							
						?>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Date Range:</label>
							</div>
							<div class="col-md-4 form-group">
								<input class="form-control" type="text"  id="from_date" name="from_date"  value=""/>
							</div>
							<div class="col-md-4 form-group">
								<input class="form-control" type="text"  id="to_date" name="to_date"  value=""/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Employee Name:</label>
							</div>
							<div class="col-md-8 form-group">
							<?php if($id != 0){ ?>
								<select id="first_name" name="first_name" class="form-control" disabled >
							
									<option selected value="<?php echo $employeeDetails['id']; ?>"><?php echo $employeeDetails['first_name']; ?></option>
							<?php } else {
									echo '<select id="first_name" name="first_name" class="form-control">
										<option value="">None</option>
									';
									
									foreach($allEmployeeNames as $key => $value){
											
											echo '<option value="'.$value['id'].'">'.$value['first_name'].'</option>';
									}
							 } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Employee ID:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" name="employee_id"  id="employee_id" value="<?php echo (isset($employeeDetails['employee_id']))? $employeeDetails['employee_id']:""; ?>" disabled />
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>GSIS:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="number" name="sss"  id="sss" value="<?php echo (isset($employeeDetails['sss']))? $employeeDetails['sss']:""; ?>"/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Phil Health:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="number"  id="phil_health" name="phil_health"  value="<?php echo (isset($employeeDetails['phil_health']))? $employeeDetails['phil_health']:""; ?>"/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Pag Ibig:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="number"  id="pag_ibig" name="pag_ibig"  value="<?php echo (isset($employeeDetails['pag_ibig']))? $employeeDetails['pag_ibig']:""; ?>"/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Over Time (hours):</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="number"  id="over_time" name="over_time"  value="0"/>
							</div>
						</div>
						
						<a href="javascript:void(0)" class="btn btn-primary pull-right btn-generate">Generate</a>
						<a href="../admin/index.php?action=Payroll" class="btn btn-danger pull-right">Cancel</a>
					</form>
				</div>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->
<?php

	include './modal/successPayroll.php';
	include './modal/errorPayroll.php';
	include './script/addPayroll.php';
?>