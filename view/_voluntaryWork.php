
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-12">
			<h3>Voluntary Work Or Involvement in Civic / Non-Government / People / Voluntary Organizations</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="voluntary_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Name and Address of Organization</th>
						<th class="text-center" colspan="2">Inclusive Dates</th>
						<th class="text-center">Number of Hours</th>
						<th class="text-center">Position / Nature of Work</th>
						
					</tr>
					<tr>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
					
					</tr>
				</thead>
				<tbody id="voluntary_body">
				<?php
				
					if(!empty($voluntaryExperience)){
						foreach($voluntaryExperience as $data){
							echo '<tr>
								<td>'.$data['name_and_address'].'</td>
								<td>'.$data['date_from'].'</td>
								<td>'.$data['date_to'].'"/></td>
								<td>'.$data['no_of_hours'].'</td>
								<td>'.$data['position'].'</td>						
								
							</tr>';
						}
					}else{
						echo '<tr>
								<td colspan="5"></td>
								
							</tr>';
					}
				?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>