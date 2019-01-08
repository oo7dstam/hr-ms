
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
										<td>'.$data['name'].'</td>
										<td>'.$data['address'].'</td>
										<td>'.$data['telephone_no'].'</td>
									</tr>
								';
							}
							
						}else{
							echo '<tr>
									<td colspan="3">No Found Result.</td>
								</tr>
							';
						}
						
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>