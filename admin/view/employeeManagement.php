<?php	
	
	$employeeAccountModel = new EmployeeAccountModel;	
	$allEmployeeAccount = $employeeAccountModel->getEmployeeAccount(array($id));
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">Employee Management</a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">Employee Account</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Employee Account</h1>
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
                        <th class='text-center'>No.</th>
                        <th class='text-center'>Username</th>
                        <th class='text-center'>Name</th>  
                        <th class='text-center'>Email</th>                      
                        <th class='text-center'>Status</th>                        
                        <th class='text-center'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($allEmployeeAccount)){
//                                
                            foreach($allEmployeeAccount as $values ){
                                $status = "";

                                if($values['status']==1){
                                    $status ="<label class='label label-success'>Active</labe>";
                                }else if($values['status']==2){
                                    $status ="<label class='label label-info'>Inactive</labe>";
                                }else if($values['status']==3){
                                    $status ="<label class='label label-default'>Waiting</labe>";
                                }else if($values['status']==4){
                                    $status ="<label class='label label-danger'>Cancelled</labe>";
                                }
                               
                                
                                if($values['status']==1){
                                    $action ="
                                            <a href='javascript:void(0)' class='btn btn-danger btn-deactivate' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Deactivate</a>
                                            <a href='javascript:void(0)' class='btn btn-default btn-cancelled' data-id='".$values['id']."' data-name='".$values['name']."'data-email='".$values['email']."'>
                                            Cancelled</a>
                                            ";
                                }else if($values['status']==2){
                                    $action ="
                                            <a href='javascript:void(0)' class='btn btn-info btn-activate' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Activate</a>
                                            <a href='javascript:void(0)' class='btn btn-default btn-cancelled' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Cancelled</a>
                                            ";
                                }else if($values['status']==3){
                                    $action ="
                                            <a href='javascript:void(0)' class='btn btn-success btn-approved' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Approved</a>
                                            <a href='javascript:void(0)' class='btn btn-default btn-cancelled' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Cancelled</a>
                                            ";
                                }else if($values['status']==4){
                                    $action ="
                                            <a href='javascript:void(0)' class='btn btn-default btn-cancelled' data-id='".$values['id']."' data-name='".$values['name']."' data-email='".$values['email']."'>
                                            Cancelled</a>
                                            ";
                                }

                                echo "<tr>
                                    <td class='text-center'>".$values['id']."</td>
                                    <td class='text-center'>".$values['username']."</td>
                                    <td class='text-center'>".$values['name']."</td>
                                    <td class='text-center'>".$values['email']."</td>
                                    <td class='text-center'>".$status."</td>
                                    
                                    <td class='text-center'>"
                                        .$action.
                                    "</td>
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
	
<?php
    include_once('./includes/footer.php'); 
    include 'script/employeeAccount.php';
    
    //this files is for deactivate button
    include 'modal/deactivate.php';
    include 'modal/successDeactivate.php';
    include 'modal/errorDeactivate.php';
                            
    //this files is for activate button
    include 'modal/activate.php';
    include 'modal/successActivate.php';
    include 'modal/errorActivate.php';
                            
    //this files is for approved button
    include 'modal/approved.php';
    include 'modal/successApproved.php';
    include 'modal/errorApproved.php'; 
                            
    //this files is for cancelled button
    include 'modal/cancelled.php';
    include 'modal/successCancelled.php';
    include 'modal/errorCancelled.php';  
?>
