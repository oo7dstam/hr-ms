<div id="pushAttendance" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header alert-info">
			<h4 class="modal-title">Push Attendance</h4>
		</div>
		<div class="modal-body">
			<form id="invite_applicant">
				<div class="row">
					<div class="col-md-4 form-group">
						<label>Select Date Range:</label>
					</div>
					<div class="col-md-4 form-group">
						<input class="form-control date_picker" type="text" name="attendance_start_date" id="attendance_start_date"/>
					</div>
					<div class="col-md-4 form-group">
						<input class="form-control date_picker" type="text" name="attendance_end_date" id="attendance_end_date"/>
					</div>
				</div>
			</form>
		</div>
		
		<div class="modal-footer">
			<a href="javascript:void(0)" class="btn btn-primary"  data-dismiss="modal" ><i class="glyphicon glyphicon-remove-sign"></i>No</a>

			<a href="javascript:void(0)" class="btn btn-success btn-push-attendance"><i class="glyphicon glyphicon-ok-sign"></i>Yes</a>
		</div>
    </div>

  </div>
</div>