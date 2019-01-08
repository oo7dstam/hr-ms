
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-10">
			<h3>Voluntary Work Or Involvement in Civic / Non-Government / People / Voluntary Organizations</h3>
		</div>
		<div class="col-md-2 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-voluntary pull-right">Add Column</a>
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
						<th class="text-center">Action</th>
						
					</tr>
					<tr>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
					
					</tr>
				</thead>
				<tbody id="voluntary_body">
				<?php
				
					if(!empty($voluntaryExperience)){
						foreach($voluntaryExperience as $data){
							echo '<tr>
								<td>
									<input type="hidden" name="voluntary_id[]" value="'.$data['id'].'"/>
									<input type="text" name="voluntary_name_and_address[]" class="form-control" value="'.$data['name_and_address'].'"/></td>
								<td><input type="text" name="voluntary_from[]" class="form-control birth_date_table" value="'.$data['date_from'].'"/></td>
								<td><input type="text" name="voluntary_to[]" class="form-control birth_date_table" value="'.$data['date_to'].'"/></td>
								<td><input type="text" name="voluntary_no_of_hour[]" class="form-control" value="'.$data['no_of_hours'].'"/></td>
								<td><input type="text" name="voluntary_position[]" class="form-control" value="'.$data['position'].'"/></td>						
								<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-voluntary" data-id=" '.$data['id'].'"><i class="fa fa-trash"></i></a></td>
								
							</tr>';
						}
					}else{
						echo '<tr>
								<td><input type="text" name="voluntary_name_and_address[]" class="form-control"/></td>
								<td><input type="text" name="voluntary_from[]" class="form-control birth_date_table"/></td>
								<td><input type="text" name="voluntary_to[]" class="form-control birth_date_table"/></td>
								<td><input type="text" name="voluntary_no_of_hour[]" class="form-control"/></td>
								<td><input type="text" name="voluntary_position[]" class="form-control"/></td>						
								<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-voluntary" data-id="0"><i class="fa fa-trash"></i></a></td>
								
							</tr>';
					}
				?>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>