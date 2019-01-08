
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	
	<div class="row">
		<div class="col-md-10">
			<h3>Other Information</h3>
		</div>
		<div class="col-md-2 form-group">
			<a href="javascript:void(0)" class="btn btn-success btn-add-other-information pull-right">Add Column</a>
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
						<th class="text-center">Action</th>
						
					</tr>
					<tr>
						<th class="text-center"></th>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
					
					</tr>
				</thead>
				<tbody id="other_information_body">
					<?php
						if(!empty($otherInformationDetails)){
							foreach($otherInformationDetails as $data){
								echo '<tr>
									<td>
										<input type="hidden" name="other_info_id[]" value="'.$data['id'].'"/>
										<input type="text" name="other_skills[]" class="form-control" value="'.$data['special_skills'].'"/></td>
									<td><input type="text" name="other_recognition[]" class="form-control" value="'.$data['recognition'].'"/></td>
									<td><input type="text" name="other_organization[]" class="form-control" value="'.$data['membership'].'"/></td>					
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-other-information" data-id="'.$data['id'].'"><i class="fa fa-trash"></i></a></td>
									
								</tr>';
							}
						}else{
							echo '<tr>
									<td><input type="text" name="other_skills[]" class="form-control"/></td>
									<td><input type="text" name="other_recognition[]" class="form-control"/></td>
									<td><input type="text" name="other_organization[]" class="form-control"/></td>					
									<td><a href="javascript:void(0)" class="btn btn-danger btn-remove-other-information" data-id="0"><i class="fa fa-trash"></i></a></td>
									
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