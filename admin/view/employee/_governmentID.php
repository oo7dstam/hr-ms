
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	
	<div class="row">
		<div class="col-md-12">
			<table id="reference_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th colspan="2">
							<p>
								Government Issued ID(i.e. Passport, GSIS, SSS, PRC, Driver's License, etc)
							</p>
							<p>
								Please Indicate ID Number and Date of Inssuance
							</p>
						</th>
						
						
					</tr>
					
				</thead>
				<tbody>
					<tr>
						<?php 
							if(isset($governmentDetails['id'])){
								echo '<input type="hidden" name="gov_id" value="'.$governmentDetails['id'].'"/>';
							}
						?>
						<td>Government Issued ID : </td>
						<td><input type="text" name="gov_government_id" class="form-control" value="<?php echo isset($governmentDetails['government_id'])?$governmentDetails['government_id']:''; ?>"/></td>
						
					</tr>
					<tr>
						<td>ID/License/Passport No.</td>
						<td><input type="text" name="gov_government_issued_id" class="form-control" value="<?php echo isset($governmentDetails['government_issued_id'])?$governmentDetails['government_issued_id']:''; ?>"/></td>
						
					</tr>
					<tr>
						<td>Date of Inssuance</td>
						<td><input type="text" name="gov_date_of_inssuance" class="date_picker form-control" value="<?php echo isset($governmentDetails['date_of_inssuance'])?$governmentDetails['date_of_inssuance']:''; ?>"/></td>
						
					</tr>
					<tr>
						<td>Place of Inssuance</td>
						<td><input type="text" name="gov_place_of_inssuance" class="form-control" value="<?php echo isset($governmentDetails['place_of_inssuance'])?$governmentDetails['place_of_inssuance']:''; ?>"/></td>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>