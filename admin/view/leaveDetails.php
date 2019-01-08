<?php	
	
	$leaveDetailsModel = new LeaveModel_cloud;	
	$leaveDetails = $leaveDetailsModel->getLeaveDetails(array($id));
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
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Leave Details</h1>
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
                        <th class='text-center'>Employee ID</th>
                        <th class='text-center'>Name</th>
                        <th class='text-center'>Leave Type</th> 
                        <th class='text-center'>Leave Duration</th> 
                        <th class='text-center'>Reason</th> 
                        <th class='text-center'>Date Submmitted</th>
                        <th class='text-center'>Status</th>
                        <th class='text-center'>Manager Remarks</th>
                        <th class='text-center'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($leaveDetails)){
//                                
                            foreach($leaveDetails as $values ){
                                $status = "";

                                if($values['status']==1){
                                    $status ="<label class='label label-success'>Approved</labe>";
                                }else if($values['status']==2){                                    
                                    $status ="<label class='label label-danger'>Disapproved</labe>";
                                }else if($values['status']==3){
                                    $status ="<label class='label label-default'>Pending</labe>";
                                }
                                
                                if($values['leave_type']==1){
                                    $leaveType ="Maternity / Paternity";
                                }else if($values['leave_type']==2){                                    
                                    $leaveType ="Vacation";
                                }else if($values['leave_type']==3){
                                    $leaveType ="Sick";
                                }
                                
                                if($values['status']==1){
                                    $remarks = $values['reason_disapproved'];
                                }else if($values['status']==2){                                    
                                    $remarks = $values['reason_disapproved'];
                                }else if($values['status']==3){
                                    $remarks = "N/A";
                                }

                                if($values['status']==3){
                                    $action = "
                                            <a href='javascript:void(0)' class='btn btn-success btn-approvedLeave' >
                                            Take Action</a>
                                            ";
                                }else{
                                    $action = "
                                            <a href='javascript:void(0)' class='btn btn-dafault btn-approvedLeave disabled' >
                                            N/A</a>
                                            ";
                                }
                               
                                $fromDate = date("F jS, Y", strtotime($values['from_date']));
                                $toDate = date("F jS, Y", strtotime($values['to_date']));
                                $applicationDate = date("F jS, Y", strtotime($values['application_date']));

                                echo "<tr>
                                    <td class='text-center'>".$values['employee_id']."</td>
                                    <td class='text-center'>".$values['name']."</td>
                                    <td class='text-center'>".$leaveType."</td>
                                    <td class='text-center'>".$fromDate . " to ". $toDate."</td>
                                    <td class='text-center'>".$values['reason']."</td>
                                    <td class='text-center'>".$applicationDate."</td>
                                    <td class='text-center'>".$status."</td>
                                    <td class='text-center'>".$remarks."</td>
                                    <td class='text-center'>
                                    ".$action."
                                                                              
                                    
                              
                                    
                                    </td>
                                    </tr>";                                   
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

                            
<!-- Modal -->
                    
<?php                           
    include_once('./modal/approvedLeave.php');                             
    include_once('./modal/successApprovedLeave.php');                             
    include_once('./modal/successDisapprovedLeave.php');                             
    include_once('./modal/errorApprovedLeave.php');                             
    include_once('./modal/errorDisapprovedLeave.php');                             
    include_once('script/leaveAction.php');                             
    include_once('includes/footer.php');        
?>
