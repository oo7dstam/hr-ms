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
		$lateTime = $payrollDetails['late']*$rate;
		$late = $payrollDetails['late'];
		$lateTime = $payrollDetails['late']."(".$lateTime.")";
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
	$totalDeductions=$income."(".$totalDeductions.")";
	
?>
	<table>
		<thead>
			<tr>
				<th width="65%"></th>
				<th>Municipality of Bacolor</th>
				
			</tr>
		</thead>
		
	</table>
	</br>
	</br>
	<table>
		<thead>
			<tr>
				<th width="10%"></th>
				<th width="25%"></th>
				<th width="15%"></th>
				<th width="25%"></th>
				<th width="25%"></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td>Employee ID : </td>
				<td><?php echo (isset($payrollDetails['employee_id']))? $payrollDetails['employee_id'] :''; ?></td>
				<td>SSS : </td>
				<td><?php echo $sss; ?></td>
			</tr>
			<tr>
				<td></td>
				<td>Name : </td>
				<td><?php echo (isset($payrollDetails['fullname']))? $payrollDetails['fullname'] :''; ?></td>
				<td>Pag-igbig : </td>
				<td><?php echo $pag_ibig; ?></td>
			</tr>
			<tr>
				<td></td>
				<td>Position: </td>
				<td><?php echo (isset($payrollDetails['position']))? $employeeModel->returnPosition($payrollDetails['position']) :''; ?></td>
				<td>Phil health : </td>
				<td><?php echo $phil_health; ?></td>
			</tr>
			<tr>
				<td></td>
				<td>Department : </td>
				<td><?php echo (isset($payrollDetails['department']))? $employeeModel->returnDepartment($payrollDetails['department']) :''; ?></td>
				<td>With holding tax : </td>
				<td><?php echo $tax; ?></td>
			</tr>
			<tr>
				<td></td>
				<td>Basic Pay : </td>
				<td><?php echo (isset($payrollDetails['salary']))? $payrollDetails['salary'] :''; ?></td>
				<td>Income : </td>
				<td><?php echo $income; ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Over time : </td>
				<td><?php echo $overTime; ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Absent/late/undertime : </td>
				<td><?php echo $lateTime; ?></td>
			</tr>
		</tbody>
	</table>
	
	</br>
	</br>
	<table>
		<thead>
			<tr>
				<th width="40%"></th>
				<th width="20%">Total Deductions:</th>
				<th width="40%"><?php echo $totalDeductions; ?></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>	
	<table>
		<thead>
			<tr>
				<th width="40%"></th>
				<th width="20%">&nbsp;&nbsp;&nbsp;Net Income:</th>
				<th width="20%"><?php echo isset($payrollDetails['net_income'])? $payrollDetails['net_income']:0; ?></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>		
	
<?php

	include './script/print.php';
?>