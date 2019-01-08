<?php

$pendingLeaves = $modelLeaves->getPendingLeaves();
$applicants = $modelApplicant->getAllApplicants();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="../admin/">Dashboard</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-8">

            <h1 class="page-header">Dashboard</h1>
        </div>
        
		<div class="col-lg-2">
			<br>
			<br>
			<a href="javascript:void(0)" class="btn btn-success btn-pull-employee">Pull Employee</a>	
		</div>
		<div class="col-lg-2">
			<br>
			<br>
			<a href="javascript:void(0)" class="btn btn-success btn-modal-attendance">Push Attendance</a>
		</div>
    
	</div>






<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pending Leaves
            </div>	
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Type of leave</th>
                            <th>Reason</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            if(count($pendingLeaves) > 0){
                                foreach($pendingLeaves as $value){
                                    $statusLeave= "<span class='label label-warning'>Pending</span>";
                                    $button = "<a href='javascript:void(0)' class='btn btn-sm btn-success btn-approve' data-id='".$value['leave_id']."'><span class='fa fa-check'></span></a>
														<a href='javascript:void(0)' class='btn btn-sm btn-danger btn-disapprove' data-id='".$value['leave_id']."'><span class='fa fa-remove'></span></a>";
                                    if($value['leave_status'] == 1){
                                        $statusLeave= "<span class='label label-success'>Approved</span>";
                                        $button ="";
                                    }else if($value['leave_status'] == 2){
                                        $statusLeave= "<span class='label label-danger'>Disapproved</span>";
                                        $button ="";
                                    }else if($value['leave_status'] == 4){
                                        $statusLeave= "<span class='label label-danger'>Cancelled</span>";
                                        $button ="";
                                    }


                                    echo "
													<tr>
													<td>".$value['employee_id']."</td>
													<td>".$value['first_name']."</td>
													<td>".$statusLeave."</td>
													<td>".$value['reason']."</td>
													<td>".$button."</td>
													</tr>
												";
                                }
                            }else{
                                echo "<td colspan='5'>No result found.</td>";
                            }

                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pending Applications
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact No.</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                            if(count($applicants) > 0){
                                foreach($applicants as $value){
                                    $statusApplicant= "<span class='label label-warning'>Pending</span>";
                                    $buttonApplicant = "<a href='javascript:void(0)' class='btn btn-warning btn-invite' data-id='".$value['id']."' data-name='".$value['first_name']."' data-email='".$value['email_address']."' data-status='".$value['status']."'><span class='fa fa-envelope'></span></a>";

                                    if($value['status'] == 2){
                                        $statusApplicant= "<span class='label label-primary'>Invited</span>";
                                        $buttonApplicant = "<a href='javascript:void(0)' class='btn btn-warning btn-invite' data-id='".$value['id']."' data-name='".$value['first_name']."' data-email='".$value['email_address']."' data-status='".$value['status']."'><span class='fa fa-envelope'></span></a>";
                                    }else if($value['status'] == 3){
                                        $statusApplicant= "<span class='label label-default'>Final Interview</span>";
                                        $buttonApplicant = "<a href='javascript:void(0)' class='btn btn-success btn-done' data-id='".$value['id']."'><span class='fa fa-check'></span></a>";
                                    }else if($value['status'] == 4){
                                        $statusApplicant= "<span class='label label-success'>Done</span>";
                                        $buttonApplicant = "";
                                    }
                                    echo "<tr>
													<td>".$value['first_name']." ".$value['last_name']."</td>
													<td>".$value['email_address']."</td>
													<td>".$value['contact_number']."</td>
													<td>".$value['desired_position']."</td>
													<td>".$statusApplicant."</td>
													<td>".$buttonApplicant."</td>
                                                    </tr>

												";
                                }
                            }else{
                                echo "<td colspan='6'>No result found.</td>";
                            }

                            ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div><!--/.row-->
</div><!--/.main-->


<?php 

include './modal/confirmApprove.php';
include './modal/confirmDisapprove.php';
include './modal/successDisapprove.php';
include './modal/errorDisapprove.php';
include './modal/successApprove.php';
include './modal/errorApprove.php';


include './modal/inviteApplicant.php';
include './modal/successInvitation.php';
include './modal/errorInvitation.php';
include './modal/doneApplicant.php';
include './modal/errorDone.php';
include './modal/successDone.php';
include './modal/pushAttendance.php';

include './modal/loading.php';

include './script/index.php';
?>