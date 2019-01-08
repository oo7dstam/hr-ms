<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HRMS</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/datepicker3.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">

        <!--        <link href="../admin/css/custom.css" rel="stylesheet">-->

        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <div class="nav-logo" href="#">
                        <p>
                            <img src="../admin/img/bacolor-logo.png" class="bacolor-logo"> 
                            <span class="bacolor-name">Municipality of Bacolor</span>
                        </p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>



        <div class="col-sm-6 col-sm-offset-6 col-lg-6 col-lg-offset-3 main">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">Job Application Form</h2>
                </div>
            </div><!--/.row-->
            <div class="panel panel-container col-sm-12  col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-xs-10 col-md-10 col-lg-10">
                        <form id="job_application_form">


                            <div class="row pull-right">                        
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="first_name"  id="first_name" value="" required placeholder="First name"/>
                                </div>                        
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="last_name"  id="last_name" value="" required placeholder="Last name"/>
                                </div>
                            </div>

                            <div class="row pull-right">                        
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="email_address"  id="email_address" value="" required placeholder="Email Address"/>
                                </div>                        
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="number"  id="number" value="" required placeholder="Phone number"/>
                                </div>
                            </div>

                            <div class="row">                        
                                <div class="col-md-10 form-group pull-rigth col-md-offset-2 ">
                                    <input class="form-control" type="text"  id="country" name="country"  value="" required
                                           placeholder="Contry"/>
                                </div>
                            </div>
                            <div class="row">                        
                                <div class="col-md-10 form-group pull-rigth col-md-offset-2">
                                    <input class="form-control" type="city"  id="city" city="city"  value="" required
                                           placeholder="City"/>
                                </div>
                            </div>
                            <div class="row">                        
                                <div class="col-md-10 form-group pull-rigth col-md-offset-2">
                                    <input class="form-control" type="address"  id="address" name="address"  value="" required
                                           placeholder="Address"/>
                                </div>
                            </div>
                            <div class="row">                        
                                <div class="col-md-10 form-group pull-rigth col-md-offset-2">

                                    <textarea class="form-control" rows="4" cols="50" id="cover_letter" name="cover_letter" placeholder="Describe yourself here..."></textarea>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-md-10 form-group pull-rigth col-md-offset-2">
                                    <select class="form-control" id="desired_position" name="desired_position">
                                        <option>Desired position</option>
                                        <option value="Municipal Government Department Head">Municipal Government Department Head</option>
                                        <option value="Executive Assistant">Executive Assistant</option>
                                        <option value="Administrative
                                                       Assistant">Administrative
                                            Assistant</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">

                                    <a href="javascript:void(0)" class="btn btn-primary pull-right btn-application">Save</a>							
                                    <span class="pull-right">&nbsp;</span>
                                    <a href="index.php" class="btn btn-danger pull-right">Cancel</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--/.row-->
            </div>
        </div>	<!--/.main-->





        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/chart.min.js"></script>
        <script src="../js/chart-data.js"></script>
        <script src="../js/easypiechart.js"></script>
        <script src="../js/easypiechart-data.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/custom.js"></script>

        <?php
        include '../script/applicant.php';
        include '../modal/successRegister.php';
        include '../modal/errorRegistration.php';
        ?>   
    </body>
    <div class="footer">
        <div class="clearfix"></div>
        <div>
            <p class="content">
                Telephone : (045) 458-0500

                |

                Email Address : info@bacolorpampanga.gov.ph
            </p>
        </div>
        <div class="row">
            <span class="reserved">
                Copyright © 2018 Municipality of Bacolor. All rights reserved.
            </span>
        </div>
    </div>

</html>

