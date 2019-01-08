<style>
    
    .bacolor-logo{
        height: 20px;
        widows: 20px;
        display: block;
        -ms-transform: translate(-5px,-10px); /* IE 9 */
        -webkit-transform: translate(-5px,-10px); /* Safari */
        transform: translate(-5px,-1.5rem); /* Standard syntax */

    }

    .bacolor-name{
        float: left;

        font-weight: 500;
        margin-top: -5rem;
        margin-left: 50px;
    }

    .notification{
        margin-top: 0;
    }

    .red{
        position: fixed;
    }
    
    .black{
        margin-top: 50px;
    }

    
</style>

<?php
	include_once('headerLogin.php'); 

    
?>
<nav class="navbar navbar-custom navbar-fixed-top red" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand " href="#">
                <p>
                    <img src="img/bacolor-logo.png" class="bacolor-logo" style="height:55px; width:55px;"> 
                    <span class="bacolor-name">Municipality of Bacolor</span>
                </p>
            </a>
        </div>
    </div><!-- /.container-fluid -->
</nav>


<div class="row black">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Employee Log in</div>
			<div class="panel-body">
				<form id="log_in_form">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						<a href="javascript:void(0)" class="btn btn-primary btn-login">Login</a></fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.col-->
</div><!-- /.row -->	
<?php
	include_once('./modal/errorLogin.php');
	include_once('./modal/successLogin.php');
    include_once('./modal/inactive.php');
	include_once('./modal/pending.php');
    include_once('./modal/cancelled.php');
	include_once('script/login.php'); 
	include_once('footer.php'); 
?>