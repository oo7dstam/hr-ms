
</br>
<div class="col-xs-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="col-md-12">
			<h3>Education Background</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="education_table" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Level</th>
						<th class="text-center">Name of School</th>
						<th class="text-center">Basic Education/Degree/Course</th>
						<th class="text-center" colspan="2">Period of Attendance</th>
						<th class="text-center">Highest Level/Units Earned</br><p>(if not graduated)</p></th>
						<th class="text-center">Year Graduated</th>
						<th class="text-center">Scholarship/Academic Honors Received</th>
					</tr>
					<tr>
						<th class="text-center"></th>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center"><p>(Write in full)</p></th>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center"><p>(if not graduated)</p></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Elementary</td>
						<td>
						<?php
							if(isset($elementary['id'])){
								echo '<input type="hidden" name="educ_id[0]" value="'.$elementary['id'].'"/>';
							}
						?>
						<input type="hidden" name="educ_type[0]" value="1"/><input type="text" name="educ_school_name[0]" class="form-control" value="<?php echo (isset($elementary['name_of_school']))? $elementary['name_of_school']:""; ?>"/></td>
						<td><input type="text" name="educ_education[0]" class="form-control" value="<?php echo (isset($elementary['course']))? $elementary['course']:""; ?>"/></td>
						<td><input type="text" name="educ_from_date[0]" class="date_picker form-control" value="<?php echo (isset($elementary['attendance_from']))? $elementary['attendance_from']:""; ?>"/></td>
						<td><input type="text" name="educ_to_date[0]" class="date_picker form-control" value="<?php echo (isset($elementary['attendance_to']))? $elementary['attendance_to']:""; ?>"/></td>
						<td><input type="text" name="educ_level[0]" class="form-control" value="<?php echo (isset($elementary['highest_level']))? $elementary['highest_level']:""; ?>"/></td>
						<td><input type="text" name="educ_year[0]" class="form-control year_picker" value="<?php echo (isset($elementary['year_graduated']))? $elementary['year_graduated']:""; ?>"/></td>
						<td><input type="text" name="educ_scholar[0]" class="form-control" value="<?php echo (isset($elementary['honor_received']))? $elementary['honor_received']:""; ?>"/></td>
					</tr>
					<tr>
						<td>Secondary</td>
						<?php
							if(isset($secondary['id'])){
								echo '<input type="hidden" name="educ_id[0]" value="'.$secondary['id'].'"/>';
							}
						?>
						<td><input type="hidden" name="educ_type[1]" value="2"/><input type="text" name="educ_school_name[1]" class="form-control" value="<?php echo (isset($secondary['name_of_school']))? $secondary['name_of_school']:""; ?>"/></td>
						<td><input type="text" name="educ_education[1]" class="form-control" value="<?php echo (isset($secondary['course']))? $secondary['course']:""; ?>"/></td>
						<td><input type="text" name="educ_from_date[1]" class="date_picker form-control" value="<?php echo (isset($secondary['attendance_from']))? $secondary['attendance_from']:""; ?>"/></td>
						<td><input type="text" name="educ_to_date[1]" class="date_picker form-control" value="<?php echo (isset($secondary['attendance_to']))? $secondary['attendance_to']:""; ?>"/></td>
						<td><input type="text" name="educ_level[1]" class="form-control" value="<?php echo (isset($secondary['highest_level']))? $secondary['highest_level']:""; ?>"/></td>
						<td><input type="text" name="educ_year[1]" class="form-control year_picker" value="<?php echo (isset($secondary['year_graduated']))? $secondary['year_graduated']:""; ?>"/></td>
						<td><input type="text" name="educ_scholar[1]" class="form-control" value="<?php echo (isset($secondary['honor_received']))? $secondary['honor_received']:""; ?>"/></td>
					</tr>
					<tr>
						<td>Vocational</td>
						<?php
							if(isset($vocational['id'])){
								echo '<input type="hidden" name="educ_id[0]" value="'.$vocational['id'].'"/>';
							}
						?>
						<td><input type="hidden" name="educ_type[2]" value="3"/><input type="text" name="educ_school_name[2]" class="form-control" value="<?php echo (isset($vocational['name_of_school']))? $vocational['name_of_school']:""; ?>"/></td>
						<td><input type="text" name="educ_education[2]" class="form-control" value="<?php echo (isset($vocational['course']))? $vocational['course']:""; ?>"/></td>
						<td><input type="text" name="educ_from_date[2]" class="date_picker form-control" value="<?php echo (isset($vocational['attendance_from']))? $vocational['attendance_from']:""; ?>"/></td>
						<td><input type="text" name="educ_to_date[2]" class="date_picker form-control" value="<?php echo (isset($vocational['attendance_to']))? $vocational['attendance_to']:""; ?>"/></td>
						<td><input type="text" name="educ_level[2]" class="form-control" value="<?php echo (isset($vocational['highest_level']))? $vocational['highest_level']:""; ?>"/></td>
						<td><input type="text" name="educ_year[2]" class="form-control year_picker" value="<?php echo (isset($vocational['year_graduated']))? $vocational['year_graduated']:""; ?>"/></td>
						<td><input type="text" name="educ_scholar[2]" class="form-control" value="<?php echo (isset($vocational['honor_received']))? $vocational['honor_received']:""; ?>"/></td>
					</tr>
					<tr>
						<td>College</td>
						<?php
							if(isset($college['id'])){
								echo '<input type="hidden" name="educ_id[0]" value="'.$college['id'].'"/>';
							}
						?>
						<td><input type="hidden" name="educ_type[3]" value="4"/><input type="text" name="educ_school_name[3]" class="form-control" value="<?php echo (isset($college['name_of_school']))? $college['name_of_school']:""; ?>"/></td>
						<td><input type="text" name="educ_education[3]" class="form-control" value="<?php echo (isset($college['course']))? $college['course']:""; ?>"/></td>
						<td><input type="text" name="educ_from_date[3]" class="date_picker form-control" value="<?php echo (isset($college['attendance_from']))? $college['attendance_from']:""; ?>"/></td>
						<td><input type="text" name="educ_to_date[3]" class="date_picker form-control" value="<?php echo (isset($college['attendance_to']))? $college['attendance_to']:""; ?>"/></td>
						<td><input type="text" name="educ_level[3]" class="form-control" value="<?php echo (isset($college['highest_level']))? $college['highest_level']:""; ?>"/></td>
						<td><input type="text" name="educ_year[3]" class="form-control year_picker" value="<?php echo (isset($college['year_graduated']))? $college['year_graduated']:""; ?>"/></td>
						<td><input type="text" name="educ_scholar[3]" class="form-control" value="<?php echo (isset($college['honor_received']))? $college['honor_received']:""; ?>"/></td>
					</tr>
					<tr>
						<td>Graduate Studies</td>
						<?php
							if(isset($graduates['id'])){
								echo '<input type="hidden" name="educ_id[0]" value="'.$graduates['id'].'"/>';
							}
						?>
						<td><input type="hidden" name="educ_type[4]" value="5"/><input type="text" name="educ_school_name[4]" class="form-control" value="<?php echo (isset($graduates['name_of_school']))? $graduates['name_of_school']:""; ?>"/></td>
						<td><input type="text" name="educ_education[4]" class="form-control" value="<?php echo (isset($graduates['course']))? $graduates['course']:""; ?>"/></td>
						<td><input type="text" name="educ_educ_from_date[4]" class="date_picker form-control" value="<?php echo (isset($graduates['attendance_from']))? $graduates['attendance_from']:""; ?>"/></td>
						<td><input type="text" name="educ_to_date[4]" class="date_picker form-control" value="<?php echo (isset($graduates['attendance_to']))? $graduates['attendance_to']:""; ?>"/></td>
						<td><input type="text" name="educ_level[4]" class="form-control" value="<?php echo (isset($graduates['highest_level']))? $graduates['highest_level']:""; ?>"/></td>
						<td><input type="text" name="educ_year[4]" class="form-control year_picker" value="<?php echo (isset($graduates['year_graduated']))? $graduates['year_graduated']:""; ?>"/></td>
						<td><input type="text" name="educ_scholar[4]" class="form-control" value="<?php echo (isset($graduates['honor_received']))? $graduates['honor_received']:""; ?>"/></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>