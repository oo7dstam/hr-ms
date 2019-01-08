
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="col-md-12">
			<h3>Civil Service Eligibility</h3>
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
						
					</tr>
					<tr>
						<th class="text-center">Barangay Eligibility/ Driver's License</th>
						<th class="text-center">(if Applicable)</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center">Number</th>
						<th class="text-center">Date of validity</th>
						
					</tr>
				</thead>
				<tbody id="civil_body">
				
					<?php
						if(!empty($civilServiceDetails)){
							foreach($civilServiceDetails as $data){
								echo'<tr>
									<td>'.$data['career_service'].'
									<td>'.$data['rating'].'</td>
									<td>'.$data['date_of_examination'].'</td>
									<td>'.$data['place_of_examination'].'</td>
									<td>'.$data['license_no'].'</td>
									<td>'.$data['validity_date'].'</td>
									
								</tr>';
							}
						}else{
							echo'<tr>
									<td colspan="6">No Found Result</td>
									
								</tr>';
						}
					
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>