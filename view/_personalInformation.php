<?php 


?>
</br>
<div class="col-xs-12 col-md-12 col-lg-12">

    <div class="row">
        <div class="col-md-3 form-group">
            <label>Surname</label>
        </div>

        <div class="col-md-3 form-group">
            <label>First Name</label>
        </div>

        <div class="col-md-3 form-group">
            <label>Middle Name</label>
        </div>

        <div class="col-md-3 form-group">
            <label>Name of Extension</label>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['last_name']))? $employeeDetails['last_name']:""; ?>
        </div>

        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['first_name']))? $employeeDetails['first_name']:""; ?>
        </div>

        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['middle_name']))? $employeeDetails['middle_name']:""; ?>
        </div>

        <div class="col-md-3 form-group">
            <?php echo (isset($employeeDetails['extension']))? $employeeDetails['extension']:""; ?>
        </div>


    </div>
    </br>

<div class="row">

    <div class="col-md-3 form-group">
        <label>Birthday:</label>
    </div>
    <div class="col-md-9 form-group">
        <label>Place of Birthday:</label>
    </div>

</div>

<div class="row">

    <div class="col-md-3 form-group">
        <?php echo (isset($employeeDetails['birthday']))? $employeeDetails['birthday']:""; ?>
    </div>

    <div class="col-md-9 form-group">
        <?php echo (isset($employeeDetails['place_of_birth']))? $employeeDetails['place_of_birth']:""; ?>
    </div>
</div>
</br>

<div class="row">
    <div class="col-md-2 form-group">
        <label>Sex:</label>
    </div>

    <div class="col-md-2 form-group">
        <label>Civil Status:</label>
    </div>

    <div class="col-md-2 form-group">
        <label>Citizenship:</label>
    </div>
    <div class="col-md-2 form-group">

    </div>
    <div class="col-md-4 form-group">
        <label>Indicate Country:</label>
    </div>

</div>

<div class="row">

    <div class="col-md-2 form-group">
        <?php 

        $sex= "";

        if(isset($employeeDetails['sex'])){

            if($employeeDetails['sex'] == 1){
                $sex= "Male";
            }else if($employeeDetails['sex'] == 2){
                $sex= "Female";
            }

        }
        echo $sex;
        ?>

    </div>

    <div class="col-md-2 form-group">
        <?php 
        $cStatus= "";

        if(isset($employeeDetails['civil_status'])){

            if($employeeDetails['civil_status'] == 1){
                $cStatus= "Single";
            }else if($employeeDetails['civil_status'] == 2){
                $cStatus= "Married";
            }else if($employeeDetails['civil_status'] == 3){
                $cStatus= "Widowed";
            }else if($employeeDetails['civil_status'] == 4){
                $cStatus= "Separated";
            }

        }
        echo $cStatus;
        ?>

    </div>

    <div class="col-md-2 form-group">
        <?php 
        $displayCitizenship= "";

        if(isset($employeeDetails['citizenship'])){


            if($employeeDetails['citizenship'] == 1){
                $displayCitizenship= "Filipino";

            }else if($employeeDetails['citizenship'] == 2){
                $displayCitizenship= "selected";
            }

        }

        echo $displayCitizenship;
        ?>

    </div>
    <div class="col-md-2">
        <?php 
        $birthCitizen= "";
        if(isset($employeeDetails['dual_citizen'])){

            if($employeeDetails['dual_citizen'] == 1){
                $birthCitizen= "By Birth";
            }else if($employeeDetails['dual_citizen'] == 2){
                $birthCitizen= "By Neutralization";
            }

        }
        echo $birthCitizen;
        ?>

    </div>
    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['dual_citizen_country']))? $employeeDetails['dual_citizen_country']:""; ?>
    </div>
</div>
</br>

<div class="row">
    <div class="col-md-4 form-group">
        <label>Height(cm):</label>
    </div>

    <div class="col-md-4 form-group">
        <label>Weight (kg):</label>
    </div>

    <div class="col-md-4 form-group">
        <label>Blood Type :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['height']))? $employeeDetails['height']:""; ?>
    </div>

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['weight']))? $employeeDetails['weight']:""; ?>
    </div>
    <div class="col-md-4 form-group">
        <?php 

        $bloodType= "";

        if(isset($employeeDetails['blood_type'])){

            if($employeeDetails['blood_type'] == 1){
                $bloodType= "Type O";
            }else if($employeeDetails['blood_type'] == 2){
                $bloodType= "Type A";
            }else if($employeeDetails['blood_type'] == 3){
                $bloodType= "Type B";
            }else if($employeeDetails['blood_type'] == 4){
                $bloodType= "Type AB";
            }

        }
        echo $bloodType;
        ?>

    </div>
</div>
</br>
<div class="row">
    <div class="col-md-4 form-group">
        <label>GSIS ID No. :</label>
    </div>

    <div class="col-md-4 form-group">
        <label>Pag Ibig ID No. :</label>
    </div>

    <div class="col-md-4 form-group">
        <label>Philhealth No. :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['gsis_no']))? $employeeDetails['gsis_no']:""; ?>
    </div>

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['pag_ibig_no']))? $employeeDetails['pag_ibig_no']:""; ?>
    </div>

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['phil_health_no']))? $employeeDetails['phil_health_no']:""; ?>
    </div>

</div>
</br>
<div class="row">

    <div class="col-md-4 form-group">
        <label>SSS No. :</label>
    </div>

    <div class="col-md-4 form-group">
        <label>TIN No. :</label>
    </div>

    <div class="col-md-4 form-group">
        <label>Agency Employee No. :</label>
    </div>

</div>
<div class="row">
    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['sss_no']))? $employeeDetails['sss_no']:""; ?>
    </div>
    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['tin_no']))? $employeeDetails['tin_no']:""; ?>
    </div>

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['agency_employee_no']))? $employeeDetails['agency_employee_no']:""; ?>
    </div>
</div>
</br>


<div class="row">
    <div class="col-md-4 form-group">
        <label>Telephone No. :</label>
    </div>
    <div class="col-md-4 form-group">
        <label>Mobile No. :</label>
    </div>
    <div class="col-md-4 form-group">
        <label>Email :</label>
    </div>

</div>

<div class="row">

    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['telephone_no']))? $employeeDetails['telephone_no']:""; ?>
    </div>
    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['mobile_no']))? $employeeDetails['mobile_no']:""; ?>
    </div>
    <div class="col-md-4 form-group">
        <?php echo (isset($employeeDetails['email_address']))? $employeeDetails['email_address']:""; ?>
    </div>

</div>
</br>


<div class="row">
    <div class="col-md-12 form-group">
        <h4><b>Residential Address:</b></h4>
    </div>

</div>
<div class="row">
    <div class="col-md-3 form-group">
        <label>House/Block/Lot No. :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Street :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Subdivision/Village :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Barangay :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-3 form-group">
        <?php echo (isset($address1['house_no']))? $address1['house_no']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address1['street']))? $address1['street']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address1['subdivision']))? $address1['subdivision']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address1['barangay']))? $address1['barangay']:""; ?>
    </div>

</div>

<div class="row">
    <div class="col-md-5 form-group">
        <label>City/Municipality. :</label>
    </div>
    <div class="col-md-5 form-group">
        <label>Province :</label>
    </div>
    <div class="col-md-2 form-group">
        <label>Zip Code :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-5 form-group">
        <?php echo (isset($address1['municipality']))? $address1['municipality']:""; ?>
    </div>
    <div class="col-md-5 form-group">
        <?php echo (isset($address1['province']))? $address1['province']:""; ?>
    </div>
    <div class="col-md-2 form-group">
        <?php echo (isset($address1['zip_code']))? $address1['zip_code']:""; ?>
    </div>

</div>
</br>
<div class="row">
    <div class="col-md-12 form-group">
        <h4><b>Permanent Address:</b></h4>
    </div>

</div>
<div class="row">
    <div class="col-md-3 form-group">
        <label>House/Block/Lot No. :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Street :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Subdivision/Village :</label>
    </div>
    <div class="col-md-3 form-group">
        <label>Barangay :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-3 form-group">
        <?php echo (isset($address2['house_no']))? $address2['house_no']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address2['street']))? $address2['street']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address2['subdivision']))? $address2['subdivision']:""; ?>
    </div>
    <div class="col-md-3 form-group">
        <?php echo (isset($address2['barangay']))? $address2['barangay']:""; ?>
    </div>

</div>

<div class="row">
    <div class="col-md-5 form-group">
        <label>City/Municipality. :</label>
    </div>
    <div class="col-md-5 form-group">
        <label>Province :</label>
    </div>
    <div class="col-md-2 form-group">
        <label>Zip Code :</label>
    </div>

</div>
<div class="row">

    <div class="col-md-5 form-group">
        <?php echo (isset($address2['municipality']))? $address2['municipality']:""; ?>
    </div>
    <div class="col-md-5 form-group">
        <?php echo (isset($address2['province']))? $address2['province']:""; ?>
    </div>
    <div class="col-md-2 form-group">
        <?php echo (isset($address2['zip_code']))? $address2['zip_code']:""; ?>
    </div>

</div>
</br>

<div class="row">
    <div class="col-md-3 col-md-offset-4">
        <img src="<?php  echo (isset($imageDetails['path']))? 'admin/'.$imageDetails['path'].$imageDetails['file_name']:"";  ?>" alt="<?php  echo (isset($imageDetails['name']))? $imageDetails['name']:"";  ?>" width="200" height="200">
    </div>
</div>

</div>