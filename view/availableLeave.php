<?php 

$availableLeave = $modelAvailableLeave->getAvailableLeave(array($id));

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li>
                <a href="./index.php?action=Employee">Leave Management</a>
            </li>
            <li class="active">
                <a href="./index.php?action=addEmployee">Available Leave</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Available Leave</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-10 col-md-10 col-lg-10">
                <!--                    <form action="upload.php" class="dropzone"></form>-->

                <div  id="applyLeave_form" action="upload.php" class="">


                    <div class="row">							
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="hidden" id="now" name="now"  value="<?php echo $now = date("Y-m-d H:i:s");; ?>" disabled required/>
                        </div>
                    </div>
                    <div class="row">							
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="hidden" id="id" name="id"  value="<?php echo $id; ?>" disabled required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group col-md-offset-2">
                            <label>Available Leave :</label>
                        </div>
                        <?php 
                        foreach ($availableLeave as $value) {
                            echo $value['available_leave'];
                        }?>
                    </div>

                    
                </div>
                
                <div class="row">
                    <input type="hidden" name="id" value="<"/>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>
</div>	<!--/.main-->
<?php

include_once('./includes/footer.php'); 
include 'script/applyLeave.php';
include 'modal/successApplyLeave.php';
include 'modal/errorApplyLeave.php';

?>

