<?php
	
	
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
	$imageDetails =array();
	$displayPositions =array();
	$displayCategories =array();
	$modelPostion = new CategoriesHasPositionModel();
	$modelCategories = new CategoriesModel();
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
		$imageDetails = $modelEmployee->getEmployeeProfile(array($id));
		
		if(!empty($employmentDetails)){
			
			$displayPositions = $modelPostion->getEmployeePosition(array($employmentDetails['position_id']));
			$displayCategories = $modelCategories->getEmployeeCategories(array($employmentDetails['category_id']));
		}
		
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
				<a href="./index.php?action=updateEmployee&id=<?php echo $id; ?>" class="btn btn-success">Edit Employee</a>
				<a href="./index.php?action=Employee" class="btn btn-danger">Back</a>
			</div>
		</div><!--/.row-->
		
		
		
		
		<ul class="nav nav-tabs">
			<li class="active" id="personal_tab_head"><a href="#personal_tab"  data-toggle="tab">Personal Information</a></li>
			<li id="family_tab_head"><a href="#family_tab"  data-toggle="tab">Family & Education</a></li>
			<li id="civil_tab_head"><a href="#civil_tab"  data-toggle="tab">Work Experience & Civil Service</a></li>
			<li id="learning_tab_head"><a href="#learning_tab"  data-toggle="tab">Learning & Other Information</a></li>
			<li id="employment_tab_head"><a href="#employment_tab"  data-toggle="tab">Employment Details</a></li>
		</ul>

		<div class="tab-content panel panel-container">
			
				<div class="tab-pane active row" id="personal_tab">
					<?php 
						
						include 'view/view/_personalInformation.php';
						
					?>
				</div><!--/.row-->
				<div class="tab-pane row" id="family_tab">
					<?php 
						include 'view/view/_familyBackground.php';
						include 'view/view/_educationBackground.php';
					?>
				</div><!--/.row-->
				
				<div class="tab-pane row" id="civil_tab">
					<?php 
						include 'view/view/_civilServiceEligibility.php';
						include 'view/view/_workExperience.php';
						include 'view/view/_voluntaryWork.php';
					?>
				</div><!--/.row-->
				<div class="tab-pane row" id="learning_tab">
					<?php 
						include 'view/view/_learningAndDevelopment.php';
						include 'view/view/_otherInformation.php';
						include 'view/view/_survey.php';
						include 'view/view/_references.php';
						include 'view/view/_governmentID.php';
					?>
				</div><!--/.row-->
				<div class="tab-pane row" id="employment_tab">
					<?php 
						include 'view/view/_employmentDetails.php';
						include 'view/view/_salary.php';
						include 'view/view/_benefits.php';
					?>
				</div><!--/.row-->
				
				
			</div>
			
		
		</div>	<!--/.main-->
	
<?php 
	include './modal/inviteEmployee.php';
	include './modal/successInvitation.php';
	include './modal/errorInvitation.php';
	include './modal/loading.php';
	include './script/Employee.php';

?>	
