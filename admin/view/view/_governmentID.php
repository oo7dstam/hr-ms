
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
						<td>Government Issued ID : </td>
						<td><?php echo isset($governmentDetails['government_id'])?$governmentDetails['government_id']:''; ?></td>
						
					</tr>
					<tr>
						<td>ID/License/Passport No.</td>
						<td><?php echo isset($governmentDetails['government_issued_id'])?$governmentDetails['government_issued_id']:''; ?></td>
						
					</tr>
					<tr>
						<td>Date of Inssuance</td>
						<td><?php echo isset($governmentDetails['date_of_inssuance'])?$governmentDetails['date_of_inssuance']:''; ?></td>
						
					</tr>
					<tr>
						<td>Place of Inssuance</td>
						<td><?php echo isset($governmentDetails['place_of_inssuance'])?$governmentDetails['place_of_inssuance']:''; ?></td>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>