
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
						<td><?php echo (isset($elementary['name_of_school']))? $elementary['name_of_school']:""; ?></td>
						<td><?php echo (isset($elementary['course']))? $elementary['course']:""; ?></td>
						<td><?php echo (isset($elementary['attendance_from']))? $elementary['attendance_from']:""; ?></td>
						<td><?php echo (isset($elementary['attendance_to']))? $elementary['attendance_to']:""; ?></td>
						<td><?php echo (isset($elementary['highest_level']))? $elementary['highest_level']:""; ?></td>
						<td><?php echo (isset($elementary['year_graduated']))? $elementary['year_graduated']:""; ?></td>
						<td><?php echo (isset($elementary['honor_received']))? $elementary['honor_received']:""; ?></td>
					</tr>
					<tr>
						<td>Secondary</td>
						<td><?php echo (isset($secondary['name_of_school']))? $secondary['name_of_school']:""; ?></td>
						<td><?php echo (isset($secondary['course']))? $secondary['course']:""; ?></td>
						<td><?php echo (isset($secondary['attendance_from']))? $secondary['attendance_from']:""; ?></td>
						<td><?php echo (isset($secondary['attendance_to']))? $secondary['attendance_to']:""; ?></td>
						<td><?php echo (isset($secondary['highest_level']))? $secondary['highest_level']:""; ?></td>
						<td><?php echo (isset($secondary['year_graduated']))? $secondary['year_graduated']:""; ?></td>
						<td><?php echo (isset($secondary['honor_received']))? $secondary['honor_received']:""; ?></td>
					</tr>
					<tr>
						<td>Vocational</td>
						<td><?php echo (isset($vocational['name_of_school']))? $vocational['name_of_school']:""; ?></td>
						<td><?php echo (isset($vocational['course']))? $vocational['course']:""; ?></td>
						<td><?php echo (isset($vocational['attendance_from']))? $vocational['attendance_from']:""; ?></td>
						<td><?php echo (isset($vocational['attendance_to']))? $vocational['attendance_to']:""; ?></td>
						<td><?php echo (isset($vocational['highest_level']))? $vocational['highest_level']:""; ?></td>
						<td><?php echo (isset($vocational['year_graduated']))? $vocational['year_graduated']:""; ?></td>
						<td><?php echo (isset($vocational['honor_received']))? $vocational['honor_received']:""; ?></td>
					</tr>
					<tr>
						<td>College</td>
						<td><?php echo (isset($college['name_of_school']))? $college['name_of_school']:""; ?></td>
						<td><?php echo (isset($college['course']))? $college['course']:""; ?></td>
						<td><?php echo (isset($college['attendance_from']))? $college['attendance_from']:""; ?></td>
						<td><?php echo (isset($college['attendance_to']))? $college['attendance_to']:""; ?></td>
						<td><?php echo (isset($college['highest_level']))? $college['highest_level']:""; ?></td>
						<td><?php echo (isset($college['year_graduated']))? $college['year_graduated']:""; ?></td>
						<td><?php echo (isset($college['honor_received']))? $college['honor_received']:""; ?></td>
					</tr>
					<tr>
						<td>Graduate Studies</td>
						<td><?php echo (isset($graduates['name_of_school']))? $graduates['name_of_school']:""; ?></td>
						<td><?php echo (isset($graduates['course']))? $graduates['course']:""; ?></td>
						<td><?php echo (isset($graduates['attendance_from']))? $graduates['attendance_from']:""; ?></td>
						<td><?php echo (isset($graduates['attendance_to']))? $graduates['attendance_to']:""; ?></td>
						<td><?php echo (isset($graduates['highest_level']))? $graduates['highest_level']:""; ?></td>
						<td><?php echo (isset($graduates['year_graduated']))? $graduates['year_graduated']:""; ?></td>
						<td><?php echo (isset($graduates['honor_received']))? $graduates['honor_received']:""; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>