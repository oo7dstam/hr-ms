
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-12">
			<h3>Other Information</h3>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="other_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Special skills and Hobbies</th>
						<th class="text-center">Non-Academic Distinctions / Recognition</th>
						<th class="text-center">Membership in Association / Organization</th>
						
					</tr>
					<tr>
						<th class="text-center"></th>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center"></th>
					
					</tr>
				</thead>
				<tbody id="other_information_body">
					<?php
						if(!empty($otherInformationDetails)){
							foreach($otherInformationDetails as $data){
								echo '<tr>
									<td>'.$data['special_skills'].'</td>
									<td>'.$data['recognition'].'</td>
									<td>'.$data['membership'].'</td>					
								</tr>';
							}
						}else{
							echo '<tr>
									<td colspan="3">No Found Result.</td>
									
								</tr>';
						}
					
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>

</br>
</br>
</br>