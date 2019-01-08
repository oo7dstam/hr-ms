<?php	
	
	$leaveModel = new LeaveModel;	
    
	$AllLeavesToday = $leaveModel->getAllLeavesToday(array($id));
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
<!--
            <li class="active">
                <a href="./index.php?action=Employee"></a>
            </li>
-->
            <li class="active">
					<a href="./index.php?action=getAllLeaveToday">All Leaves Today</a>
				</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">All Leaves Today</h1>
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

                        <th>Leave Type</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Reason</th>
                        <th>Date Submmitted</th>
                        <th>Status</th>
                        <th>Employee Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($AllLeavesToday)){
                            
                            echo json_encode($AllLeavesToday);
                            
//                            echo date('d.m.Y', strtotime('-1 days'));
//                            echo date("F jS, Y", strtotime('-1 days'));
                            
//                                
//                            foreach($AllLeavesToday as $values ){
//                                $status = "";
//
//                                if($values['status']==0){
//                                    $status ="<label class='label label-danger'>Disapproved</labe>";
//                                }else if($values['status']==1){
//                                    $status ="<label class='label label-success'>Approved</labe>";
//                                }else if($values['status']==2){
//                                    $status ="<label class='label label-default'>Waiting</labe>";
//                                }
//
//                                $fromDate = date("F jS, Y", strtotime($values['from_date']));
//                                $toDate = date("F jS, Y", strtotime($values['to_date']));
//                                $submmitted = date("F jS, Y", strtotime($values['application_date']));
//
//                                echo "<tr>
//
//                                    <td>".$values['leave_type']."</td>
//                                    <td>".$fromDate."</td>
//                                    <td>".$toDate."</td>
//                                    <td>".$values['reason']."</td>
//                                    <td>".$submmitted."</td>
//                                    <td>".$status."</td>
//                                    <td>".$values['employee_id']."</td>
//                                    </tr>";
//
//
////                                    echo $values    ;
//                            }
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
    include 'script/getAllLeavesToday.php';
    include 'modal/successApplyLeave.php';
    include 'modal/errorApplyLeave.php';
?>
