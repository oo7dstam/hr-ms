
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-12">
			<h3>Learning and Development(L&D)</h3>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="learning_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Title of Learning and Development Interventions/Training Programs</th>
						<th class="text-center" colspan="2">Inclusive Dates of Attendance</th>
						<th class="text-center">Number of Hours</th>
						<th class="text-center">Type of ID</th>
						<th class="text-center">Conducted / Sponsored By</th>
						
					</tr>
					<tr>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"></th>
						<th class="text-center"><p>(Managerial /Supervisor /Technical /etc)</p></th>
						<th class="text-center"><p>(Write in full)</p></th>
					
					</tr>
				</thead>
				<tbody id="learning_body">
					<?php
						if(!empty($learningDetails)){
							foreach($learningDetails as $data){
								echo '<tr>
									<td>'.$data['training_programs'].'</td>
									<td>'.$data['date_from'].'</td>
									<td>'.$data['date_to'].'</td>
									<td>'.$data['no_of_hours'].'</td>
									<td>'.$data['type'].'</td>						
									<td>'.$data['conducted'].'</td>						
									
								</tr>';
							}
						}else{
							echo '<tr>
									<td colspan="6">No Found Result.</td>
									
								</tr>';
						}
					
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>