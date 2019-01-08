
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-12">
			<h3>Work Experience</h3>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="work_exp_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center" colspan="2">Inclusive Dates</th>
						<th class="text-center">Position Title</th>
						<th class="text-center">Department/Agency/Office/Company</th>
						<th class="text-center">Monthly Salary</th>
						<th class="text-center" >Salary/Job/Pay Grade</th>
						<th class="text-center">Status of Appointment</th>
						<th class="text-center">Govenrment Service</th>
						
					</tr>
					<tr>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"><p>(Write in full/Do not abbreviate)</p></th>
						<th class="text-center"><p>(Write in full/Do not abbreviate)</p></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center"><p>(Y/N)</p></th>
						
					</tr>
				</thead>
				<tbody id="work_exp_body">
					<?php
						if(!empty($workExperienceDetails)){
							foreach($workExperienceDetails as $data){
								echo '<tr>
									<td>'.$data['date_from'].'</td>
									<td>'.$data['date_to'].'</td>
									<td>'.$data['position'].'</td>
									<td>'.$data['company'].'</td>
									<td>'.$data['salary'].'</td>
									<td>'.$data['salary_job_pay_grade'].'</td>
									<td>'.$data['status_of_appointment'].'</td>
									<td>'.$data['government_service'].'</td>
									
								</tr>';
							}
						}else{
							echo '<tr>
									<td colspan="8">No Found Result.</td>
									
								</tr>';
						}
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>