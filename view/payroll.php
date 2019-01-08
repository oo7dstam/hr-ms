<?php


$modelPayroll = new PayrollModel;
$payrolls = $modelPayroll->getAllPayroll(array($id));
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Payroll">Payroll</a>
                <div id="display"></div>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">

            <h1 class="page-header">Payroll</h1>
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
                                    <th>Date From</th>
                                    <th>Date To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(!empty($payrolls)){

                                    foreach($payrolls as $value){
                                        $button="
										<a href='./index.php?action=viewPayroll&id=".$value['payroll_id']."' class='btn btn-primary'><span class='fa fa-search'></span></a>

									";
                                      
                                        $status = "<label class='label label-success'>Generated</label>";

                                        echo "<tr>
										<td>".$value['employee_id']."</td>
										<td>".$value['first_name']."</td>
										<td>".$value['middle_name']."</td>
										<td>".$value['last_name']."</td>
										<td>".$value['from_date']."</td>
										<td>".$value['to_date']."</td>
										<td>
											".$button."
										</td>
									</tr>";
                                    }
                                }else{
                                    echo "
									<tr>
										<td colspan='8'>No found result.</td>
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


//include './script/Payroll.php';
?>
