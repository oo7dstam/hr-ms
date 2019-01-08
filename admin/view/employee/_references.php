
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-12">
			<h3>References</h3>
			<span>(Person not related by consanguinity or affinity to applicant/appointee)</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="reference_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Name</th>
						<th class="text-center">Address</th>
						<th class="text-center">Tel. No.</th>
						
					</tr>
					
				</thead>
				<tbody>
					<?php 
						if(!empty($referenceDetails)){
							foreach($referenceDetails as $data){
								echo '<tr>
										<td><input type="hidden" name="ref_id[]" value="'.$data['id'].'"/><input type="text" name="ref_name[]" class="form-control" value="'.$data['name'].'"/></td>
										<td><input type="text" name="ref_address[]" class="form-control" value="'.$data['address'].'"/></td>
										<td><input type="text" name="ref_tel_no[]" class="form-control" value="'.$data['telephone_no'].'"/></td>
									</tr>
								';
							}
							
						}else{
							echo '<tr>
									<td><input type="text" name="ref_name[]" class="form-control"/></td>
									<td><input type="text" name="ref_address[]" class="form-control"/></td>
									<td><input type="text" name="ref_tel_no[]" class="form-control"/></td>
								</tr>
								<tr>
									<td><input type="text" name="ref_name[]" class="form-control"/></td>
									<td><input type="text" name="ref_address[]" class="form-control"/></td>
									<td><input type="text" name="ref_tel_no[]" class="form-control"/></td>
								</tr>
								<tr>
									<td><input type="text" name="ref_name[]" class="form-control"/></td>
									<td><input type="text" name="ref_address[]" class="form-control"/></td>
									<td><input type="text" name="ref_tel_no[]" class="form-control"/></td>
								</tr>
							';
						}
						
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>