<?php
	
	
	$payrollModel = new PayrollModel;
	$employeeModel = new EmployeeModel;
	
	$payrollDetails = $payrollModel->getPayrollDetails(array($id));
	
	$overTime = null;
	$lateTime = null;
	$late=null;
	$totalDeductions = 0;
	$sss = 0;
	$phil_health = 0;
	$pag_ibig = 0;
	$tax = 0;
	$income = 0;
	
	if(isset($payrollDetails['over_time']) && !empty($payrollDetails['over_time'])){
		$rate = 0;
		
		if(isset($payrollDetails['rate'])){
			$rate = $payrollDetails['rate'];
		}
		$overTime = $payrollDetails['over_time']*$rate;
		
		$overTime = $payrollDetails['over_time']."(".$overTime.")";
	}
	
	if(isset($payrollDetails['late']) && !empty($payrollDetails['late'])){
		$rate = 0;
		
		if(isset($payrollDetails['rate'])){
			$rate = $payrollDetails['rate'];
		}
		$lateDeduction = $payrollDetails['late']*$rate;
		$late = $lateDeduction;
		$lateTime = $payrollDetails['late']."(".number_format($lateDeduction,2).")";
	}
	
	if(isset($payrollDetails['sss'])){
		$sss = $payrollDetails['sss'];
	}
	
	if(isset($payrollDetails['phil_health'])){
		$phil_health = $payrollDetails['phil_health'];
	}
	
	if(isset($payrollDetails['pag_ibig'])){
		$pag_ibig = $payrollDetails['pag_ibig'];
	}
	
	if(isset($payrollDetails['tax'])){
		$tax = $payrollDetails['tax'];
	}
	
	if(isset($payrollDetails['income'])){
		$income = $payrollDetails['income'];
	}
	
	
	$totalDeductions=$sss+$phil_health+$pag_ibig+$tax+$late;
	$totalDeductions="(".number_format($totalDeductions,2).")";
	
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="./index.php?action=Payroll">Payroll</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-9">
			
				<h1 class="page-header">View Payroll</h1>
			</div>
			<div class="col-lg-3">
				<br>
				<br>
				<a href="./index.php?action=Print&id=<?php echo $id;?>" class="btn-print btn btn-primary" target="_blank">Print</a>
				<a href="./index.php?action=Payroll" class="btn btn-danger">Back</a>
			</div>
		</div><!--/.row-->
		
		
		
		
	
		<div class="tab-content panel panel-container">
			
				<div class="tab-pane active row" id="payslip_print">
					</br>
					</br>
					<div class="col-xs-10 col-md-10 col-lg-10">
						
						<div class="row">
							<div class="col-md-4 form-group col-lg-offset-6">
								<b>Municipality of Bacolor</b>
							</div>
							
							
						</div>
						
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Employee ID: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo (isset($payrollDetails['employee_id']))? $payrollDetails['employee_id'] :''; ?></b>
							</div>
							<div class="col-md-2">
								<b>GSIS : </b>
							</div>
							<div class="col-md-2">
								<b><?php echo $sss; ?></b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Full Name: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo (isset($payrollDetails['fullname']))? $payrollDetails['fullname'] :''; ?></b>
							</div>
							<div class="col-md-2">
								<b>Pag-igbig : </b>
							</div>
							<div class="col-md-2">
								<b><?php echo $pag_ibig; ?></b>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Position: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo (isset($payrollDetails['position']))? $payrollDetails['position'] :''; ?></b>
							</div>
							<div class="col-md-2">
								<b>Phil health : </b>
							</div>
							<div class="col-md-2">
								<b><?php echo $phil_health; ?></b>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Department: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo (isset($payrollDetails['department']))? $payrollDetails['department'] :''; ?></b>
							</div>
							<div class="col-md-2">
								<b>With holding tax:</b>
							</div>
							<div class="col-md-2">
								<b><?php echo $tax; ?></b>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Basic Pay: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo $income*2; ?></b>
							</div>
							<div class="col-md-2">
								<b>Income:</b>
							</div>
							<div class="col-md-2">
								<b><?php echo $income; ?></b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								<b>Income: </b>
							</div>
							<div class="col-md-3">
								<b><?php echo $income; ?></b>
							</div>
							<div class="col-md-2">
								<b>Over time:</b>
							</div>
							<div class="col-md-2">
								<b><?php echo $overTime; ?></b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								
							</div>
							<div class="col-md-2">
								<b>Absent/late/undertime:</b>
							</div>
							<div class="col-md-2">
								<b> <?php echo $lateTime; ?></b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								
							</div>
							<div class="col-md-4">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								
							</div>
							<div class="col-md-2">
								<b>Total Deductions:</b>
							</div>
							<div class="col-md-2">
								<b> <?php echo  $totalDeductions; ?></b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								
							</div>
							<div class="col-md-2">
								<b>Net Income:</b>
							</div>
							<div class="col-md-2">
								<b> <?php echo isset($payrollDetails['net_income'])? $payrollDetails['net_income']:0; ?></b>
							</div>
						</div>
						</br>
						</br>
						</br>
						
					</div>
				</div><!--/.row-->
			</div>
	</div>	<!--/.main-->
<?php

	include './script/viewPayroll.php';
?>