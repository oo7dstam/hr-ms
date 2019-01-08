<?php	
	
	$leaveModel = new LeaveModel_cloud;	
	$allLeave = $leaveModel->getAllLeaves(array($id));
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
                <a href="./index.php?action=Employee">All Leaves</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">All Leaves</h1>
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
                        <th class="text-center">No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Leave Type</th>                        
                        <th class="text-center">Date Submmitted</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($allLeave)){
                            
                            $counter = 1;
                            foreach($allLeave as $values ){
                                
                                $status = "";

                                if($values['status']==1){
                                    $status ="<label class='label label-success'>Approved</labe>";
                                }else if($values['status']==2){
                                    $status ="<label class='label label-danger'>Disapproved</labe>";
                                }else if($values['status']==3){
                                    $status ="<label class='label label-default'>Pending</labe>";
                                }
                                
                                if($values['leave_type'] == 1){
                                    $leaveType = "Maternity / Paternity";
                                }elseif($values['leave_type'] == 2){
                                    $leaveType = "Vacation";
                                }elseif($values['leave_type'] == 3){
                                     $leaveType = "Sick";
                                }
                                   
                               
                               
                                $submmitted = date("F jS, Y", strtotime($values['application_date']));

                                echo "<tr>
                                    <td class='text-center'>".$counter."</td>
                                    <td class='text-center'>".$values['name']."</td>
                                    <td class='text-center'>".$leaveType."</td>
                                    <td class='text-center'>".$submmitted."</td>
                                    <td class='text-center'>".$status."</td>
                                    <td class='text-center'><a href='index.php?action=leaveDetails&id=".$values['id']."'><button class='btn btn-md btn-info'>View Details</button></a></td>
                                    </tr>";

                                $counter++;
                            }
//                                



//								echo "<pre>";
//								var_dump($values);
//                                echo "</pre>";


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
//    include 'modal/successApplyLeave.php';
//    include 'modal/errorApplyLeave.php';
?>
