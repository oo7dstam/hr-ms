
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="col-md-4">
			<h3>Civil Service Eligibility</h3>
		</div>
		<div class="col-md-8 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-civil pull-right">Add Column</a>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="civil_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Career Service/RA 1080 (Board/Bar)Under Special Laws/CES/CSEE</th>
						<th class="text-center">Rating</th>
						<th class="text-center">Date of Examination/Conferment</th>
						<th class="text-center">Place of Examination/Conferment</th>
						<th class="text-center" colspan="2">License (if applicable)</th>
						<th class="text-center">Action</th>
						
					</tr>
					<tr>
						<th class="text-center">Barangay Eligibility/ Driver's License</th>
						<th class="text-center">(if Applicable)</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center">Number</th>
						<th class="text-center">Date of validity</th>
						<th class="text-center"></th>
						
					</tr>
				</thead>
				<tbody id="civil_body">
				
					<?php
						if(!empty($civilServiceDetails)){
							foreach($civilServiceDetails as $data){
								echo'<tr>
									<td>
										<input type="hidden" name="civil_id[]"  value="'.$data['id'].'"/>
										<input type="text" name="civil_service[]" class="form-control" value="'.$data['career_service'].'"/></td>
									<td><input type="text" name="civil_rating[]" class="form-control" value="'.$data['rating'].'"/></td>
									<td><input type="text" name="civil_date_of_exam[]" class="birth_date_table form-control" value="'.$data['date_of_examination'].'"/></td>
									<td><input type="text" name="civil_place_of_exam[]" class="form-control" value="'.$data['place_of_examination'].'"/></td>
									<td><input type="text" name="civil_number_license[]" class="form-control" value="'.$data['license_no'].'"/></td>
									<td><input type="text" name="civil_date_of_validity[]" class="birth_date_table form-control" value="'.$data['validity_date'].'"/></td>
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-civil" data-id="'.$data['id'].'"><i class="fa fa-trash"></i></a></td>
									
								</tr>';
							}
						}else{
							echo'<tr>
									<td><input type="text" name="civil_service[]" class="form-control"/></td>
									<td><input type="text" name="civil_rating[]" class="form-control"/></td>
									<td><input type="text" name="civil_date_of_exam[]" class="birth_date_table form-control"/></td>
									<td><input type="text" name="civil_place_of_exam[]" class="form-control"/></td>
									<td><input type="text" name="civil_number_license[]" class="form-control"/></td>
									<td><input type="text" name="civil_date_of_validity[]" class="birth_date_table form-control"/></td>
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-civil" disabled><i class="fa fa-trash"></i></a></td>
									
								</tr>';
						}
					
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>