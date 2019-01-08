<div id="verificationCode" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header alert-danger">
        <h4 class="modal-title">Failed to login!</h4>
      </div>
      <div class="modal-body">
			<div class="row">
				<div class="col-md-8 form-group">
					<span class="color-black">Please input your verification code</span>
				</div>
			</div>
			<form id="verification_code">
				<div class="row">
					<div class="col-md-2 form-group col-md-offset-2">
						<label>Code:</label>
					</div>
					<div class="col-md-8 form-group">
						<input class="form-control" type="text" name="code" id="code" />
					</div>
				</div>
				
						
			</form>
      </div>
      <div class="modal-footer">
			<a href="javascript:void(0)" class="btn btn-primary pull-right btn-submit">Submit</a>
			<a href="javascript:void(0)" class="btn btn-danger pull-right"  data-dismiss="modal" >Cancel</a>
      </div>
    </div>

  </div>
</div>