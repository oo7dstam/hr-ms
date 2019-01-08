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
                        <span class="bacolor-name">Welcome - <?php echo $_SESSION['account']['name']; ?></span></p>
                        
                </a>a>
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
				<!--			<li>-->
    <!--                            <a href="#">-->
				<!--				<div><em class="fa fa-user"></em> 5 New Followers-->
				<!--					<span class="pull-right text-muted small">4 mins ago</span></div>-->
    <!--                            </a>-->
    <!--                        </li>-->
                            
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
			<li class="parent "><a href="./index.php?action=employeeDetails"><em class="fa fa-dashboard">&nbsp;</em> My Profile</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Leave Management <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="./index.php?action=availableLeave">
                            <span class="fa fa-users" >&nbsp;</span> Available Leave
                        </a>
                    </li>
					<li>
                        <a class="" href="./index.php?action=applyLeave">
                            <span class="fa fa-users" >&nbsp;</span> Apply Leave
                        </a>
                    </li>
					<li>
                        <a class="" href="./index.php?action=leaveHistory">
                            <span class="fa fa-users">&nbsp;</span> Leave History
                        </a>
                    </li>
				</ul>
			</li>
            <li>
                <a class="" href="./index.php?action=attendance">
                    <span class="fa fa-users">&nbsp;</span> Attendance
                </a>
            </li>
            <li>
                <a class="" href="./index.php?action=payroll">
                    <span class="fa fa-users">&nbsp;</span> Payroll
                </a>
            </li>

<!--
			<li>
                <a href="./index.php?action=getAllLeaveToday">
                    <em class="fa fa-calendar">&nbsp;</em> Black
                </a>
            </li>
            <li>
                <a href="./index.php?action=getAllApplicant">
                    <em class="fa fa-calendar">&nbsp;</em> Pending Applicant
                </a>
            </li>
-->

			
			
			<li><a href="javascript:void(0)" class="btn-log-out"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->