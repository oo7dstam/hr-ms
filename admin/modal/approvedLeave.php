<div id="approvedLeave" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Leave</h4>
            </div>
            <div id="approvedLeave_form" class="modal-body">
                <form role="form"> 
                    <input type="hidden" id="id" name="id" value="<?php echo $values['id'];?>">
                 
                    <div class="form-group">
                        <label>Selects</label>
                        <select class="form-control" id="leaveAction" name="leaveAction">
                            <option>Take Action</option>
                            <option value="1">Approved</option>
                            <option value="2">Disapproved</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Reason</label>
                        <select class="form-control" id="leaveAction" name="leaveAction">
                            <option>--Select Reason--</option>
                            <option value="1">Invalid Reason</option>
                            <option value="2">Wrong Timing</option>
                            <option value="3">You are the only person who is available for the particular work in this office.</option>
                            <option value="4">Your project deadline is near.</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Other</label>
                        <textarea id="comment" name="comment" class="form-control" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-approvedLeave-confirm">Submit</button>
            </div>
        </div>

    </div>
</div>


