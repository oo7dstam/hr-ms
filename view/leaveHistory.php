<?php	
	
    $leaveModel = new LeaveModel;	
	$leaveHistory = $leaveModel->getLeaveHistory(array($id));
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">Leave Management</a>
            </li>
            <li class="active">
					<a href="./index.php?action=addEmployee">Leave History</a>
				</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Leave History</h1>
        </div>
    </div><!--/.row-->




    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <colgroup>
                        <colspan width="10%">
                        <colspan width="20%">
                        <colspan width="20%">
                        <colspan width="20%">
                        <colspan width="10%">
                        <colspan width="10%">
                        <colspan width="10%">
                    </colgroup>
                    <tr>

                        <th class='text-center'>Leave Type</th>
                        <th class='text-center'>From</th>
                        <th class='text-center'>To</th>
                        <th class='text-center'>Reason</th>
                        <th class='text-center'>Date Submmitted</th>
                        <th class='text-center'>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($leaveHistory)){
//                                
                            foreach($leaveHistory as $values ){
                                // status 0 = disapproved
                                // status 1 = approved
                                // status 2 = waiting for approval                                
                                
                                $status = "";

                                if($values['status']==1){
                                    $status ="<label class='label label-success'>Approved</labe>";
                                }else if($values['status']==2){
                                    $status ="<label class='label label-danger'>Disapproved</labe>";
                                }else if($values['status']==3){
                                    $status ="<label class='label label-default'>Pending</labe>";
                                }else if($values['status']==4){
                                    $status ="<label class='label label-default'>Cancelled</labe>";
                                }                                 
                                
                                
                                
                                if($values['leave_type']==1){
                                    $leaveType ="Maternity / Paternity";
                                }else if($values['leave_type']==2){
                                    $leaveType ="Vacation";
                                }else if($values['leave_type']==3){
                                    $leaveType ="Sick";
                                }

                                $fromDate = date("F jS, Y", strtotime($values['from_date']));
                                $toDate = date("F jS, Y", strtotime($values['to_date']));
                                $submmitted = date("F jS, Y", strtotime($values['application_date']));

                                echo "<tr>

                                    <td class='text-center'>".$leaveType."</td>
                                    <td class='text-center'>".$fromDate."</td>
                                    <td class='text-center'>".$toDate."</td>
                                    <td class='text-center'>".$values['reason']."</td>
                                    <td class='text-center'>".$submmitted."</td>
                                    <td class='text-center'>".$status."</td>
                                    </tr>";//                                   
                            }
                            
                        }else{
                            echo "
                                <tr>
                                    <td colspan='7'>No found result.</td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div><!--/.row-->
</div>	<!--/.main-->
	
<?php
    include_once('./includes/footer.php'); 
    include 'script/applyLeave.php';
    include 'modal/successApplyLeave.php';
    include 'modal/errorApplyLeave.php';
?>
