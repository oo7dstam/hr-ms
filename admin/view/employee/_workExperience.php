
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-4">
			<h3>Work Experience</h3>
		</div>
		<div class="col-md-8 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-work-exp pull-right">Add Column</a>
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
						<th class="text-center">Action</th>
						
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
						<th class="text-center"></th>
						
					</tr>
				</thead>
				<tbody id="work_exp_body">
					<?php
						if(!empty($workExperienceDetails)){
							foreach($workExperienceDetails as $data){
								echo '<tr>
									<td><input type="hidden" name="work_experience_id[]" value="'.$data['id'].'"/>
									<input type="text" name="work_from[]" class="form-control birth_date_table" value="'.$data['date_from'].'"/></td>
									<td><input type="text" name="work_to[]" class="form-control birth_date_table" value="'.$data['date_to'].'"/></td>
									<td><input type="text" name="work_position[]" class="form-control" value="'.$data['position'].'"/></td>
									<td><input type="text" name="work_company[]" class="form-control" value="'.$data['company'].'"/></td>
									<td><input type="text" name="work_salary[]" class="form-control" value="'.$data['salary'].'"/></td>
									<td><input type="text" name="work_grade[]" class="form-control" value="'.$data['salary_job_pay_grade'].'"/></td>
									<td><input type="text" name="work_status[]" class="form-control" value="'.$data['status_of_appointment'].'"/></td>
									<td><input type="text" name="work_service[]" class="form-control" value="'.$data['government_service'].'"/></td>
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-work-exp" data-id="'.$data['id'].'"><i class="fa fa-trash"></i></a></td>
									
								</tr>';
							}
						}else{
							echo '<tr>
									<td><input type="text" name="work_from[]" class="form-control birth_date_table"/></td>
									<td><input type="text" name="work_to[]" class="form-control birth_date_table"/></td>
									<td><input type="text" name="work_position[]" class="form-control"/></td>
									<td><input type="text" name="work_company[]" class="form-control"/></td>
									<td><input type="text" name="work_salary[]" class="form-control"/></td>
									<td><input type="text" name="work_grade[]" class="form-control"/></td>
									<td><input type="text" name="work_status[]" class="form-control"/></td>
									<td><input type="text" name="work_service[]" class="form-control"/></td>
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-work-exp" data-id="0" disabled><i class="fa fa-trash"></i></a></td>
									
								</tr>';
						}
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>