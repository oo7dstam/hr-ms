<?php

echo $id = $_SESSION['employee_id'];
$employeeModel = new EmployeeModel;

$employeeDetails = $employeeModel->getEmployeeDetails(array($id));
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="./index.php?action=Employee">User Management</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-9">

            <h1 class="page-header">Employees</h1>
        </div>
        <div class="col-lg-3">
            <br>
            <br>
            <a href="./index.php?action=updateEmployee" class="btn btn-success">Edit Profile</a>
        </div>
    </div><!--/.row-->




    <ul class="nav nav-tabs">
        <li class="active" id="details_tab_head"><a href="#details_tab"  data-toggle="tab">Basic Information</a></li>
        <li id="employment_tab_head"><a href="#employment_tab"  data-toggle="tab">Employment Details</a></li>
        <li id="salary_tab_head"><a href="#salary_tab"  data-toggle="tab">Salary</a></li>
        <li id="benefits"><a href="#benefits_tab"  data-toggle="tab">Benefits</a></li>
    </ul>

    <div class="tab-content panel panel-container">

        <div class="tab-pane active row" id="details_tab">
            </br>
        </br>
    <div class="col-xs-10 col-md-10 col-lg-10">

        <div class="row">
            <div class="col-md-2 form-group">
                <label>Last Name</label>
            </div>
            <div class="col-md-3 form-group">
                <?php echo (isset($employeeDetails['last_name']))? $employeeDetails['last_name']:""; ?>
            </div>
            <div class="col-md-2 form-group">
                <label>First Name</label>
            </div>
            <div class="col-md-3 form-group">
                <?php echo (isset($employeeDetails['first_name']))? $employeeDetails['first_name']:""; ?>
            </div>

            <div class="col-md-1 form-group">
                <label>M.I.</label>
            </div>
            <div class="col-md-1 form-group">
                <?php echo (isset($employeeDetails['middle_name']))? $employeeDetails['middle_name']:""; ?>
            </div>


        </div>

        <div class="row">
            <div class="col-md-2 form-group">
                <label>Email:</label>
            </div>
            <div class="col-md-3 form-group">
                <?php echo (isset($employeeDetails['email_address']))? $employeeDetails['email_address']:""; ?>
            </div>
            <div class="col-md-2 form-group">
                <label>Birthday:</label>
            </div>
            <div class="col-md-3 form-group">
                <?php echo (isset($employeeDetails['birthday']))? $employeeDetails['birthday']:""; ?>
            </div>


            <div class="col-md-1 form-group">
                <label>Sex:</label>
            </div>
            <div class="col-md-1 form-group">

                <?php 
                if(isset($employeeDetails['sex'])){
                    $selected= "";
                    if($employeeDetails['sex'] == 1){
                        $selected= "Male";
                    }else if($employeeDetails['sex'] == 2){
                        $selected= "Female";
                    }

                }else{
                    $selected = "N/A";
                    echo $selected;
                }
                
                ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-2 form-group">
                <label>Civil Status:</label>
            </div>
            <div class="col-md-3 form-group">
                <?php 
                if(isset($employeeDetails['civil_status'])){
                    $selectedCivil= "";
                    if($employeeDetails['civil_status'] == 1){
                        $selectedCivil= "Single";
                    }else if($employeeDetails['civil_status'] == 2){
                        $selectedCivil= "Married";
                    }else if($employeeDetails['civil_status'] == 3){
                        $selectedCivil= "Widowed";
                    }else if($employeeDetails['civil_status'] == 4){
                        $selectedCivil= "Separated";
                    }else{
                        $selectedCivil= "";
                    }

                }else{
                    $selectedCivil= "N/A";
                    echo $selectedCivil;
                }
                
                ?>

            </div>

            <div class="col-md-2 form-group">
                <label>Citizenship:</label>
            </div>
            <div class="col-md-3 form-group">
                <?php 
                if(isset($employeeDetails['citizenship'])){
                    $selectedCitizen= "";

                    if($employeeDetails['citizenship'] == 1){
                        $selectedCitizen= "Filipino";
                    }else if($employeeDetails['citizenship'] == 2){
                        $selectedCitizen= "Dual Citizenship";
                    }

                }else{
                    $selectedCitizen= "N/A";
                    echo $selectedCitizen;
                }
                
                ?>

            </div>
        </div>

        <div class="row">
            <div class="col-md-2 form-group">
                <label>Phone Number:</label>
            </div>
            <div class="col-md-3 form-group">
                <?php echo (isset($employeeDetails['address']))? $employeeDetails['address']:""; ?>
            </div>
            <div class="col-md-2 form-group">
                <label>Address:</label>
            </div>
            <div class="col-md-5 form-group">
                <?php echo (isset($employeeDetails['address']))? $employeeDetails['address']:""; ?>
            </div>

        </div>


    </div>
</div><!--/.row-->
<div class="tab-pane row" id="employment_tab">
    </br>
</br>
<div class="col-xs-10 col-md-10 col-lg-10">
    <div class="row">
        <div class="col-md-2 form-group">
            <label>Position:</label>
        </div>
        <div class="col-md-3 form-group">
            <?php 
            if(isset($employeeDetails['position'])){
                $selectedPosition= "";
                if($employeeDetails['position'] == 1){
                    $selectedPosition= "Teacher 1";
                }else if($employeeDetails['position'] == 2){
                    $selectedPosition= "Teacher 2";
                }else if($employeeDetails['position'] == 3){
                    $selectedPosition= "Teacher 3";
                }else if($employeeDetails['position'] == 4){
                    $selectedPosition= "Head Teacher";
                }else if($employeeDetails['position'] == 5){
                    $selectedPosition= "Principal";
                }

            }
            $selectedPosition= "N/A";
            echo $selectedPosition;
            ?>

        </div>
        <div class="col-md-2 form-group">
            <label>Department:</label>
        </div>
        <div class="col-md-3 form-group">
            <?php 
            if(isset($employeeDetails['department'])){
                $selectedPosition= "";
                if($employeeDetails['department'] == 1){
                    $selectedPosition= "Human Resources";
                }else if($employeeDetails['department'] == 2){
                    $selectedPosition= "Admin";
                }else if($employeeDetails['department'] == 3){
                    $selectedPosition= "Information Technology";
                }else if($employeeDetails['department'] == 4){
                    $selectedPosition= "Back Office";
                }else if($employeeDetails['department'] == 5){
                    $selectedPosition= "Maintenance";
                }

            }
            echo $selectedPosition;
            ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-2 form-group">
            <label>Date Hired:</label>
        </div>
        <div class="col-md-5 form-group">
            <?php echo (isset($employeeDetails['date_hired']))? $employeeDetails['date_hired']:""; ?>
        </div>
    </div>


</div>
</div><!--/.row-->
<div class="tab-pane row" id="salary_tab">
    </br>
</br>
<div class="col-xs-10 col-md-10 col-lg-10">
    <div class="row">
        <div class="col-md-1 form-group">
            <label>Rate:</label>
        </div>
        <div class="col-md-2 form-group">
            <?php echo (isset($employeeDetails['rate']))? $employeeDetails['rate']:""; ?>
        </div>
        <div class="col-md-1 form-group">
            <label>Salary:</label>
        </div>
        <div class="col-md-5 form-group">
            <?php echo (isset($employeeDetails['salary']))? $employeeDetails['salary']:""; ?>
        </div>
    </div>

</div>

</div><!--/.row-->
<div class="tab-pane row" id="benefits_tab">
    </br>
</br>
<div class="col-xs-10 col-md-10 col-lg-10">
    <div class="row">
        <div class="col-md-2 form-group">
            <label>SSS:</label>
        </div>
        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['sss']))? $employeeDetails['sss']:""; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 form-group">
            <label>Phil Health:</label>
        </div>
        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['phil_health']))? $employeeDetails['phil_health']:""; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 form-group">
            <label>Pag ibig:</label>
        </div>
        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['pag_ibig']))? $employeeDetails['pag_ibig']:""; ?>
        </div>
    </div>

</div>

</div><!--/.row-->
</div>
</div>	<!--/.main-->

<?php 
//include './modal/inviteEmployee.php';
//include './modal/successInvitation.php';
//include './modal/errorInvitation.php';
//include './modal/loading.php';
//include './script/Employee.php';

?>	
