<?php 

    
	$applicants = $modelApplicant->getAllApplicants(); 
?>	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">User Managemnet</a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">Applicant Details</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Applicant Details</h1>
        </div>
        <div class="col-lg-2">
				<br>
				<br>
<!--				<a href="javascript:void(0)" class="btn btn-success btn-add-category">Add Category</a>-->
			</div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">            
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>                                
                                    <th>Name</th>
							<th>Email</th>
							<th>Phone No.</th>
							<th>Position</th>
							<th>Status</th>
							<th>Actions</th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
							if($applicants){
								foreach($applicants as $value){
									$status = "";
									$button = "";
									
									if($value['status']==1){
										$status ="<label class='label label-warning'>PENDING</labe>";
										$button = "<a href='javascript:void(0)' class='btn btn-warning btn-invite' data-id='".$value['id']."' data-name='".$value['first_name']."' data-email='".$value['email_address']."' data-status='".$value['status']."'><span class='fa fa-envelope'></span></a>";
									}else if($value['status']==2){
										$status ="<label class='label label-primary'>INVITED</labe>";
										$button = "<a href='javascript:void(0)' class='btn btn-warning btn-invite' data-id='".$value['id']."' data-name='".$value['first_name']."' data-email='".$value['email_address']."' data-status='".$value['status']."'><span class='fa fa-envelope'></span></a>";
									}else if($value['status']==3){
										$status ="<label class='label label-primary'>FINAL INTERVIEW</labe>";
										$button = "<a href='javascript:void(0)' class='btn btn-success btn-done' data-id='".$value['id']."'><span class='fa fa-check'></span></a>";
									}else if($value['status']==4){
										$status ="<label class='label label-success'>Done</labe>";
									}
									
									
									
									echo "<tr>
										<td>".$value['first_name']." ".$value['last_name']."</td>
										<td>".$value['email_address']."</td>
										<td>".$value['contact_number']."</td>
										<td>".$value['desired_position']."</td>
										<td>".$status."</td>
										<td>
											".$button."
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
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>  <!--/.main-->





<?php 
	include './modal/inviteApplicant.php';
	include './modal/successInvitation.php';
	include './modal/errorInvitation.php';
	include './modal/doneApplicant.php';
	include './modal/errorDone.php';
	include './modal/successDone.php';
	include './modal/loading.php';
	
	include './script/Applicant.php';
?>
