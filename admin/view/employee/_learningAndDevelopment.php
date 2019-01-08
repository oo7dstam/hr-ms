
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-10">
			<h3>Learning and Development(L&D)</h3>
		</div>
		<div class="col-md-2 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-learning pull-right">Add Column</a>
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
						<th class="text-center">Action</th>
						
					</tr>
					<tr>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"></th>
						<th class="text-center"><p>(Managerial /Supervisor /Technical /etc)</p></th>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center"></th>
					
					</tr>
				</thead>
				<tbody id="learning_body">
					<?php
						if(!empty($learningDetails)){
							foreach($learningDetails as $data){
								echo '<tr>
									<td>
									<input type="hidden" name="learning_id[]" value="'.$data['id'].'"/>
										<input type="text"  class="form-control " name="learning_title[]" value="'.$data['training_programs'].'"/></td>
									<td><input type="text" name="learning_from[]" class="form-control birth_date_table" value="'.$data['date_from'].'"/></td>
									<td><input type="text" name="learning_to[]" class="form-control birth_date_table" value="'.$data['date_to'].'"/></td>
									<td><input type="text" name="learning_hours[]" class="form-control" value="'.$data['no_of_hours'].'"/></td>
									<td><input type="text" name="learning_ids[]" class="form-control" value="'.$data['type'].'"/></td>						
									<td><input type="text" name="learning_sponsored[]" class="form-control" value="'.$data['conducted'].'"/></td>						
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-learning" data-id="'.$data['id'].'"><i class="fa fa-trash"></i></a></td>
									
								</tr>';
							}
						}else{
							echo '<tr>
									<td><input type="text" name="learning_title[]" class="form-control"/></td>
									<td><input type="text" name="learning_from[]" class="form-control birth_date_table"/></td>
									<td><input type="text" name="learning_to[]" class="form-control birth_date_table"/></td>
									<td><input type="text" name="learning_hours[]" class="form-control"/></td>
									<td><input type="text" name="learning_ids[]" class="form-control"/></td>						
									<td><input type="text" name="learning_sponsored[]" class="form-control"/></td>						
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-learning" data-id="0"><i class="fa fa-trash"></i></a></td>
									
								</tr>';
						}
					
					?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>