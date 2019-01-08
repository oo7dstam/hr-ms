<?php 

	$employeeDetails = $modelEmployee->getEmployeeDetailss(array($id));
    $availableLeave = $modelAvailableLeave->getAvailableLeave(array($id));

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li>
					<a href="./index.php?action=Employee">Leave Management</a>
				</li>
				<li class="active">
					<a href="./index.php?action=addEmployee">Apply Leave</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Leave Application Form</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-10 col-md-10 col-lg-10">
<!--                    <form action="upload.php" class="dropzone"></form>-->
                    
                    
                    <?php 
                    foreach ($availableLeave as $value) {
                        if($value['available_leave'] <= 0){ ?>
                    <h1 class="text-center">You have <?php echo $value['available_leave'] ?> leave left.</h1>
                   
                    <div  id="applyLeave_form" action="upload.php" class="applyLeave_form">


                        <div class="row">							
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="hidden" id="now" name="now"  value="<?php echo $now = date("Y-m-d H:i:s");; ?>"  required/>
                            </div>
                        </div>
                        <div class="row">							
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="hidden" id="id" name="id"  value="<?php echo $id; ?>"  required/>
                            </div>
                        </div>


                        <?php
                                                           foreach ($availableLeave as $value) {;?>
                        <input class="form-control" type="hidden" id="available_leave" name="available_leave"  value="<?php echo $value['available_leave']; ?>" disabled required/>

                        <input class="form-control" type="hidden" id="vacation_leave" name="vacation_leave"  value="<?php echo $value['vacation_leave']; ?>" disabled required/>

                        <input class="form-control" type="hidden" id="sick_leave" name="sick_leave"  value="<?php echo $value['sick_leave']; ?>" disabled required/>
                        <?php  } ?>

                        <div class="row">
                            <div class="col-md-2 form-group col-md-offset-2">
                                <label>Leave Type:</label>
                            </div>
                            <div class="col-md-8 form-group" required>
                                <select class="form-control" id="leaveType" name="leaveType">
                                    <option value="0">None</option>
                                    <option value="1">Maternity / Paternity</option>
                                    <option value="2">Vacation</option>
                                    <option value="3">Sick</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group col-md-offset-2">
                                <label>From Date:</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" id="fromDate" name="fromDate"  value="" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group col-md-offset-2">
                                <label>To Date</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" id="toDate" name="toDate"  value="" required/>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2 form-group col-md-offset-2">
                                <label>Reason:</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <textarea class="form-control" type="text" id="reason" name="reason"  value="" required/></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Attachment:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <form action="./upload.php" class="dropzone" id="myDropzone"></form>
                        </div>
                    </div>   




                    <div class="row">
                        <input type="hidden" name="id" value="<"/>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">

                            <a href="javascript:void(0)" class="btn btn-primary pull-right btn-applyLeave" id="submit">Save</a>

                            <span class="pull-right">&nbsp;</span>
                            <a href="../admin/index.php?action=Employee" class="btn btn-danger pull-right">Cancel</a>

                        </div>
                    </div>
                </div>

                    <?php
                        }else{
                            echo '<div  id="applyLeave_form" action="upload.php" class="disabled">


                        <div class="row">							
							<div class="col-md-8 form-group">
								<input class="form-control" type="hidden" id="now" name="now"  value="<?php echo $now = date("Y-m-d H:i:s");; ?>
							</div>
						</div>
                        <div class="row">							
							<div class="col-md-8 form-group">
                                <input class="form-control" type="hidden" id="id" name="id"  value="<?php echo $id; ?>">
							</div>
						</div>


                        <?php
                        foreach ($availableLeave as $value) {;?>
                        <input class="form-control" type="hidden" id="available_leave" name="available_leave"  value="<?php echo $value["available_leave"]; ?>

                        <input class="form-control" type="hidden" id="vacation_leave" name="vacation_leave"  value="<?php echo $value["vacation_leave"]; ?>

                        <input class="form-control" type="hidden" id="sick_leave" name="sick_leave"  value="<?php echo $value["sick_leave"]; ?>
                        <?php  } ?>

						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Leave Type:</label>
							</div>
                            <div class="col-md-8 form-group" required>
								<select class="form-control" id="leaveType" name="leaveType">
                                    <option value="0">None</option>
                                    <option value="1">Maternity / Paternity</option>
                                    <option value="2">Vacation</option>
                                    <option value="3">Sick</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>From Date:</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" id="fromDate" name="fromDate"  value="" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>To Date</label>
							</div>
							<div class="col-md-8 form-group">
								<input class="form-control" type="text" id="toDate" name="toDate"  value="" required/>
							</div>
						</div>


						<div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Reason:</label>
							</div>
							<div class="col-md-8 form-group">
								<textarea class="form-control" type="text" id="reason" name="reason"  value="" required/></textarea>
							</div>
						</div>

                        <div class="row">
							<div class="col-md-2 form-group col-md-offset-2">
								<label>Attachment:</label>
							</div>
							<div class="col-md-8 form-group">
								<form action="./upload.php" class="dropzone" id="myDropzone"></form>
							</div>
						</div>   




						<div class="row">
							<input type="hidden" name="id" value="<"/>
						</div>

						<div class="row">
							<div class="col-md-12 form-group">

                                <a href="javascript:void(0)" class="btn btn-primary pull-right btn-applyLeave" id="submit">Save</a>

								<span class="pull-right">&nbsp;</span>
								<a href="../admin/index.php?action=Employee" class="btn btn-danger pull-right">Cancel</a>

							</div>
						</div>
					</div>';
                        }

                    }?>
				</div>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->
<?php
    
	include_once('./includes/footer.php'); 
    include 'script/applyLeave.php';
	include 'modal/successApplyLeave.php';
	include 'modal/errorApplyLeave.php';
	
?>

