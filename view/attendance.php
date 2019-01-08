<?php


$attendanceModel = new AttendanceModel;

$attendance = $attendanceModel->getAllAttendanceById(array($id));
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Attendance">Attendance</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Attendance</h1>
        </div>
        <div class="col-lg-2">
            <br>
            <br>
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
                                    <th>Employee ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Time in</th>
                                    <th>Time out</th>
                                    <!--<th>Actions</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(!empty($attendance)){

                                    foreach($attendance as $value){
                                        echo "<tr>
										<td>".$value['employee_id']."</td>
										<td>".$value['first_name']."</td>
										<td>".$value['middle_name']."</td>
										<td>".$value['last_name']."</td>
										<td>".$value['time_in']."</td>
										<td>".$value['time_out']."</td>
										<!--<td>
											<a href='javascript:void(0)' class='btn btn-info' data-id='".$value['id']."'><span class='fa fa-search'></span></a>
											<a href='./index.php?action=updateEmployee&id=".$value['id']."' class='btn btn-primary'><span class='fa fa-pencil'></span></a>
											<a href='javascript:void(0)' class='btn btn-danger btn-delete' data-id='".$value['id']."'><span class='fa fa-trash'></span></a>
										</td>-->
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
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->

<?php

//include './script/attendance.php';
?>
