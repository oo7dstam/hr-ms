<?php

    $employee = $modelEmployee->getEmployeeDetails(array($id));
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Admin">My Profile</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Employee Profile</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <colgroup>
                        <colspan width="35%">
                        <colspan width="35%">
                        <colspan width="20%">
                        <colspan width="10%">
                    </colgroup>
                    <tr>
                        <th class='text-center'>Name</th>
                        <th class='text-center'>Position</th>
                        <th class='text-center'>Date Hired</th>
                        <th class='text-center'>Email Address </th>
                        <th class='text-center'>Status </th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                        if($employee){
                            
                            echo " <tr>
                                <td class='text-center'>".$employee['first_name']. " ". $employee['middle_name']." ".$employee['last_name']."</td>
                                <td class='text-center'>".$employee['position']."</td>
                                <td class='text-center'>".$employee['date_hired']."</td> 
                                <td class='text-center'>".$employee['email_address']."</td> 
                                <td class='text-center'>".$employee['status']."</td> 
                            </tr>";
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
?>