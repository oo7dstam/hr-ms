<?php 	

session_start();
include './lib/db.php'; 
include './components/dev.php';

spl_autoload_register(function($model_name) {
	include './model/' . $model_name . '.php';
});

if(isset($_SESSION['admin_access'])){
	
	include_once('./includes/header.php'); 
	

	$modelEmployee = new EmployeeModel;
	$modelAdmin = new AdminModel;
	$modelAttendance = new AttendanceModel;
	$modelLeaves = new LeavesModel;
	$modelApplicant = new ApplicantModel;
	$modelPayroll = new PayrollModel;
	$currentUser = $_SESSION['account'];
	
	$page = "";
	if(!empty(isset($_GET['action'])) && isset($_GET['action'])){
		
		$action = $_GET['action'];
		
		$id = 0;
		
		//MODEL EMPLOYEE ----------------------------------
		if($_GET['action'] == "addEmployee"){
			$page = "Employee";
			include_once('./includes/nav.php'); 
			include_once('./view/addEmployee.php');
			
		}else if($_GET['action'] == "Employee"){
			$page = "Employee";
			include_once('./includes/nav.php'); 
			include_once('./view/Employee.php');
			
		}else if($_GET['action'] == "updateEmployee"){
			$id = 0;
			$page = "Employee";
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			include_once('./includes/nav.php'); 
			include_once('./view/addEmployee.php');
			
		}else if($_GET['action'] == "viewEmployee"){
			$id = 0;
			$page = "Employee";
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			include_once('./includes/nav.php'); 
			include_once('./view/viewEmployee.php');
			
		}
		//MODEL ADMIN ----------------------------------
		else if($_GET['action'] == "addAdmin"){
			$page = "Admin";
			include_once('./includes/nav.php'); 
			include_once('./view/addAdmin.php');
		}else if($_GET['action'] == "Admin"){
			$page = "Admin";
			include_once('./includes/nav.php'); 
			include_once('./view/Admin.php');
			
		}else if($_GET['action'] == "updateAdmin"){
			$id = 0;
			$page = "Admin";
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			include_once('./includes/nav.php'); 
			include_once('./view/addAdmin.php');
			
		}
			
		//Attendance ----------------------------------
		else if($_GET['action'] == "Attendance"){
			$page = "Attendance";
			include_once('./includes/nav.php'); 
			include_once('./view/Attendance.php');
		}
		
		
		//Leaves ----------------------------------
		else if($_GET['action'] == "Leaves"){
			$page = "Leaves";
			include_once('./includes/nav.php'); 
			include_once('./view/Leaves.php');
		}
		
		
		//Applicants ----------------------------------
		else if($_GET['action'] == "Applicants"){
			$page = "Applicants";
			include_once('./includes/nav.php'); 
			include_once('./view/Applicant.php');
		}

		
		//Payroll ----------------------------------
		else if($_GET['action'] == "Payroll"){
			$page = "Payroll";
			include_once('./includes/nav.php'); 
			include_once('./view/Payroll.php');
		}else if($_GET['action'] == "generatePayroll"){
			$page = "Payroll";
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			
			include_once('./includes/nav.php'); 
			include_once('./view/addPayroll.php');
		}else if($_GET['action'] == "viewPayroll"){
			$page = "Payroll";
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			
			include_once('./includes/nav.php'); 
			include_once('./view/viewPayroll.php');
		}else if($_GET['action'] == "Print"){
			$page = "Payroll";
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			
			include_once('./view/print.php');
		}

		//Add Categories ----------------------------------
		else if($_GET['action'] == "AddCategories"){
            $page = "AddCategories";
			
			include_once('./includes/nav.php');
			include_once('./view/addCategories.php');
		}

		//Add Position ----------------------------------
		else if($_GET['action'] == "AddPosition"){
            $page = "AddPosition";
			include_once('./includes/nav.php');
			include_once('./view/addPosition.php');
		}
		//Add Position ----------------------------------
		else if($_GET['action'] == "AddSalaryGrade"){
            $page = "AddPosition";
			include_once('./includes/nav.php');
			include_once('./view/addSalaryGrade.php');
		}
		//Applicants ----------------------------------
		else if($_GET['action'] == "EmployeeManagement"){
			$page = "EmployeeManagement";
			include_once('./includes/nav.php');
			include_once('./view/employeeManagement.php');
		}
		//All Leave ----------------------------------
		else if($_GET['action'] == "allLeaves"){
            $page = "AllLeave";
			include_once('./includes/nav.php');
			include_once('./view/allLeaves.php');
		}//Appproved Leave ----------------------------------
		else if($_GET['action'] == "approvedLeaves"){
            $page = "ApprovedLeave";
			include_once('./includes/nav.php');
			include_once('./view/approvedLeaves.php');
		}//Disapproved Leave ----------------------------------
		else if($_GET['action'] == "disapprovedLeaves"){
            $page = "DisapprovedLeave";
			include_once('./includes/nav.php');
			include_once('./view/disapprovedLeaves.php');
		}//Pending Leave ----------------------------------
		else if($_GET['action'] == "pendingLeaves"){
            $page = "PendingLeave";
			include_once('./includes/nav.php');
			include_once('./view/pendingLeaves.php');

		}//Leave Details----------------------------------
		else if($_GET['action'] == "leaveDetails"){

			$id = 0;
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}

			include_once('./includes/nav.php');
			include_once('./view/leaveDetails.php');
        }//Edit Category----------------------------------
        else if($_GET['action'] == "editCategory"){

            $id = 0;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            include_once('./includes/nav.php');
            include_once('./view/editCategory.php');
        }//Edit Salary Grade----------------------------------
        else if($_GET['action'] == "editSalaryGrade"){

            $id = 0;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            include_once('./includes/nav.php');
            include_once('./view/editSalaryGrade.php');
        }//Edit Position--------------------------
        else if($_GET['action'] == "editPosition"){

            $id = 0;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            include_once('./includes/nav.php');
            include_once('./view/editPosition.php');
        }
		
		else{
			include_once('./includes/nav.php'); 
			include_once('./view/index.php'); 
			
		}
		
	}else{
		include_once('./includes/nav.php'); 
		include_once('./view/index.php'); 
	}
	
	include_once('./includes/footer.php'); 	
}else{
	include_once('./includes/login.php'); 		
}




