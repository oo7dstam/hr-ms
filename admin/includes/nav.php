<?php 
	
	$userManagementPage = false;
	if($page == "Employee" || $page =="Admin" || $page == "Applicants"){
		$userManagementPage = true;
	}

    $controlpanelmanagement = false;
        if($page == "AddCategories" || $page =="AddPositio"){
            $controlpanelmanagement = true;
        }
    $leavemanagement = false;
        if($page == "AllLeave" || $page =="ApprovedLeave" || $page =="DisapprovedLeave" || $page =="PendingLeave"){
            $leavemanagement = true;
        }
?>


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand " href="#">
                <p>
                <img src="img/bacolor-logo.png" class="bacolor-logo"> 
                    <span class="bacolor-name">Municipality of Bacolor</span></p>
<!--                <span>HRMS</span> - <?php echo $_SESSION['account']['name']; ?>-->
            </a>
				<!--<ul class="nav navbar-top-links navbar-right">-->
				<!--	<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">-->
				<!--		<em class="fa fa-bell"></em><span class="label label-info">5</span>-->
				<!--	</a>-->
				<!--		<ul class="dropdown-menu dropdown-alerts">-->
				<!--			<li><a href="#">-->
				<!--				<div><em class="fa fa-envelope"></em> 1 New Message-->
				<!--					<span class="pull-right text-muted small">3 mins ago</span></div>-->
				<!--			</a></li>-->
				<!--			<li class="divider"></li>-->
				<!--			<li><a href="#">-->
				<!--				<div><em class="fa fa-heart"></em> 12 New Likes-->
				<!--					<span class="pull-right text-muted small">4 mins ago</span></div>-->
				<!--			</a></li>-->
				<!--			<li class="divider"></li>-->
				<!--			<li><a href="#">-->
				<!--				<div><em class="fa fa-user"></em> 5 New Followers-->
				<!--					<span class="pull-right text-muted small">4 mins ago</span></div>-->
				<!--			</a></li>-->
				<!--		</ul>-->
				<!--	</li>-->
				<!--</ul>-->
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!--<div class="profile-userpic">-->
			<!--	<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">-->
			<!--</div>-->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['account']['name']; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			
			<li class="<?php echo (empty($page))?"active":""; ?>"><a href="./"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent <?php echo ($userManagementPage)?"active":""; ?>">
				<a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-navicon ">&nbsp;</em> 
					User Management 
					<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
						<em class="fa fa-plus"></em>
					</span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="./index.php?action=Admin">
						<span class="fa fa-users" >&nbsp;</span> Admin
					</a></li>
					<li><a class="" href="./index.php?action=Employee">
						<span class="fa fa-users">&nbsp;</span> Employees
					</a></li>
					<li><a class="" href="./index.php?action=Applicants">
						<span class="fa fa-users">&nbsp;</span> Applicants
					</a></li>
				</ul>
			</li>
<!--			<li class="<?php echo ($page =="Leaves")?"active":""; ?>"><a href="./index.php?action=Leaves"><em class="fa fa-calendar">&nbsp;</em> Leaves</a></li>-->
			<li class="<?php echo ($page =="Attendance")?"active":""; ?>"><a href="./index.php?action=Attendance"><em class="fa fa-calendar">&nbsp;</em> Attendance</a></li>
			<li class="<?php echo ($page =="Payroll")?"active":""; ?>"><a href="./index.php?action=Payroll"><em class="fa fa-money">&nbsp;</em> Payroll</a></li>
			<li class="<?php echo ($page =="EmployeeManagement")?"active":""; ?>"><a href="./index.php?action=EmployeeManagement"><em class="fa fa-money">&nbsp;</em> Employee Management</a></li>
			<!--<li><a href="#"><em class="fa fa-clone">&nbsp;</em> Reporting</a></li>-->
			
			<li class="parent <?php echo ($controlpanelmanagement)?"active":""; ?>">
				<a data-toggle="collapse" href="#sub-item-2">
					<em class="fa fa-navicon ">&nbsp;</em> 
						Control Panel 
					<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
						<em class="fa fa-plus"></em>
					</span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="./index.php?action=AddCategories">
							<span class="fa fa-users" >&nbsp;</span> 
							Add Category
						</a>
					</li>
					<li>
						<a class="" href="./index.php?action=AddSalaryGrade">
							<span class="fa fa-users" >&nbsp;</span> 
							Salary Grade
						</a>
					</li>
					<li>
						<a class="" href="./index.php?action=AddPosition">
							<span class="fa fa-users">&nbsp;</span> 
							Add Position
						</a>
					</li>
				</ul>
			</li>
			<li class="parent <?php echo ($leavemanagement)?"active":""; ?>">
				<a data-toggle="collapse" href="#sub-item-3">
					<em class="fa fa-navicon ">&nbsp;</em> 
						Leave Management
					<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
						<em class="fa fa-plus"></em>
					</span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
                    <a class="" href="./index.php?action=allLeaves">
                        <span class="fa fa-users" >&nbsp;</span> All Leaves
                    </a>
	                </li>
	                <li>
	                    <a class="" href="./index.php?action=approvedLeaves">
	                        <span class="fa fa-users">&nbsp;</span> Approved Leaves
	                    </a>
	                </li>
	                <li>
	                    <a class="" href="./index.php?action=disapprovedLeaves">
	                        <span class="fa fa-users">&nbsp;</span> Disapproved Leaves
	                    </a>
	                </li>
	                <li>
	                    <a class="" href="./index.php?action=pendingLeaves">
	                        <span class="fa fa-users">&nbsp;</span> Pending Leaves
	                    </a>
	                </li>
				</ul>
			</li>
			<li><a href="javascript:void(0)" class="btn-log-out"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->