<div id="confirmDisapprove" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header alert-info">
			<h4 class="modal-title">Confirmation!</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<span class="color-black">Are you sure you want to disapprove this?</span>
				</div>
			</div>
			</br>
			<form id="form_disapprove">
				<div class="row">
					<div class="col-md-4">
						<label>Reason</label>
					</div>
					<div class="col-md-8">
						<select class="form-control" name="disapproved_reason" id="disapproved_reason">
							<option>Man Power</option>
						</select>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a href="javascript:void(0)" class="btn btn-primary"  data-dismiss="modal" ><i class="glyphicon glyphicon-remove-sign"></i>No</a>

			<a href="javascript:void(0)" class="btn btn-danger btn-disapprove-confirm"><i class="glyphicon glyphicon-ok-sign"></i>Yes</a>
		</div>
    </div>

  </div>
</div>