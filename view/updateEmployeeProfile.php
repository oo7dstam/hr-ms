<?php 
echo $id = $_SESSION['employee_id'];

$employeeDetails =array();
$employeeAddress =array();
$employeeSpouse =array();
$employeeParents =array();
$employeeEducation =array();
$father =array();
$mother =array();
$children =array();
$elementary =array();
$vocational =array();
$college =array();
$secondary =array();
$graduates =array();
$civilServiceDetails =array();
$workExperienceDetails =array();
$voluntaryExperience =array();
$learningDetails =array();
$otherInformationDetails =array();
$questionDetails =array();
$referenceDetails =array();
$governmentDetails =array();
$employmentDetails =array();
$salaryDetails =array();
if($id > 0){
    $employmentDetails = $modelEmployee->getEmployeeEmploymentDetails(array($id));
    $employeeDetails = $modelEmployee->getEmployeeBasicDetails(array($id));
    $employeeAddress = $modelEmployee->getEmployeeAddress(array($id));
    $employeeSpouse = $modelEmployee->getEmployeeSpouse(array($id));
    $employeeParents = $modelEmployee->getEmployeeParents(array($id));
    $children = $modelEmployee->getEmployeeChildren(array($id));
    $employeeEducation = $modelEmployee->getEmployeeEducation(array($id));
    $civilServiceDetails = $modelEmployee->getEmployeeCivilService(array($id));
    $workExperienceDetails = $modelEmployee->getEmployeeWorkExperience(array($id));
    $voluntaryExperience = $modelEmployee->getEmployeeVoluntaryExperience(array($id));
    $learningDetails = $modelEmployee->getEmployeeLearningDetails(array($id));
    $otherInformationDetails = $modelEmployee->getEmployeeotherInformationDetails(array($id));
    $questionDetails = $modelEmployee->getEmployeeQuestionDetails(array($id));
    $referenceDetails = $modelEmployee->getEmployeeReferences(array($id));
    $governmentDetails = $modelEmployee->getEmployeeGovernmentDetails(array($id));
    $salaryDetails = $modelEmployee->getEmployeeSalaryDisplayDetails(array($id));
}
$address1 =array();
$address2 =array();

if(!empty($employeeAddress)){
    foreach($employeeAddress as $key=>$data){
        if($data['type'] == 1){
            $address1 = $data;
        }else{
            $address2 = $data;
        }
    }
}


if(!empty($employeeParents)){
    foreach($employeeParents as $key=>$data){
        if($data['type'] == 1){
            $father = $data;
        }else{
            $mother = $data;
        }
    }
}

if(!empty($employeeEducation)){
    foreach($employeeEducation as $key=>$data){
        if($data['type'] == 1){
            $elementary = $data;
        }else if($data['type'] == 2){
            $secondary = $data;

        }else if($data['type'] == 3){
            $vocational = $data;

        }else if($data['type'] == 4){
            $college = $data;

        }else{
            $graduates = $data;
        }
    }
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li>
                <a href="./index.php?action=Employee">User Management</a>
            </li>
            <li class="active">
                <a href="./index.php?action=addEmployee">Employee</a>
            </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee Details</h1>
        </div>
    </div><!--/.row-->
    <ul class="nav nav-tabs">
        <li class="active" id="personal_tab_head"><a href="#personal_tab"  data-toggle="tab">Personal Information</a></li>
        <li id="family_tab_head"><a href="#family_tab"  data-toggle="tab">Family & Education</a></li>
        <li id="civil_tab_head"><a href="#civil_tab"  data-toggle="tab">Work Experience & Civil Service</a></li>
        <li id="learning_tab_head"><a href="#learning_tab"  data-toggle="tab">Learning & Other Information</a></li>
        <li class="hidden" id="employment_tab_head"><a href="#employment_tab"  data-toggle="tab">Employment Details</a></li>
    </ul>
    <form id="employee_form">
        <div class="tab-content panel panel-container">

            <div class="tab-pane active row" id="personal_tab">
                <?php 

                include 'employee/_personalInformation.php';

                ?>
            </div><!--/.row-->
            <div class="tab-pane row" id="family_tab">
                <?php 
                include 'employee/_familyBackground.php';
                include 'employee/_educationBackground.php';
                ?>
            </div><!--/.row-->

            <div class="tab-pane row" id="civil_tab">
                <?php 
                include 'employee/_civilServiceEligibility.php';
                include 'employee/_workExperience.php';
                include 'employee/_voluntaryWork.php';
                ?>
            </div><!--/.row-->
            <div class="tab-pane row" id="learning_tab">
                <?php 
                include 'employee/_learningAndDevelopment.php';
                include 'employee/_otherInformation.php';
                include 'employee/_survey.php';
                include 'employee/_references.php';
                include 'employee/_governmentID.php';
                ?>
            </div><!--/.row-->
            <div class="tab-pane row" id="employment_tab">
                <?php 
                include 'employee/_employmentDetails.php';
                include 'employee/_salary.php';
                include 'employee/_benefits.php';
                ?>
            </div><!--/.row-->

            <?php if($id != 0){ ?>
            <div class="row">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>

                <input type="hidden" name="salary_id" value="<?php echo $salaryDetails['id']; ?>"/>
                <input type="hidden" name="personal_id" value="<?php echo $employeeDetails['personal_id']; ?>"/>
                <input type="hidden" name="details_id" value="<?php echo $employmentDetails['id']; ?>"/>
                <input type="hidden" name="spouse_id" value="<?php echo $employeeSpouse['id']; ?>"/>
                <input type="hidden" name="education_id[0]" value="<?php echo $elementary['id']; ?>"/>
                <input type="hidden" name="education_id[1]" value="<?php echo $secondary['id']; ?>"/>
                <input type="hidden" name="education_id[3]" value="<?php echo $vocational['id']; ?>"/>
                <input type="hidden" name="education_id[4]" value="<?php echo $college['id']; ?>"/>
                <input type="hidden" name="education_id[5]" value="<?php echo $graduates['id']; ?>"/>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-12 form-group">
                   
                    <a href="javascript:void(0)" class="btn btn-primary pull-right btn-update">Update</a>
                  
                    <span class="pull-right">&nbsp;</span>
                    <a href="index.php?action=employeeDetails" class="btn btn-danger pull-right">Cancel</a>

                </div>
            </div>
        </div>

    </form>
</div>	<!--/.main-->

<?php
include './modal/successUpdateEmployee.php';
include 'script/updateEmployee.php';
?>
