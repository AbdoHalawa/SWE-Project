<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin control panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="..\Public\CSS\bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="..\Public\CSS\font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="..\Public\js\morris\morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="..\Public\CSS\custom.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f17a435b32.js" crossorigin="anonymous"></script>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
include "../views/partials/adminNav.php";
?>

<body>
  
<br>
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-users"></i>
            </span>
            <div class="text-box">
                <p class="main-text">120 Students</p>
                <p class="text-muted">Enrolled</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-chalkboard-teacher"></i>
            </span>
            <div class="text-box">
                <p class="main-text">30 Teachers</p>
                <p class="text-muted">Teaching</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue set-icon">
                <i class="fa fa-book"></i>
            </span>
            <div class="text-box">
                <p class="main-text">240 Courses</p>
                <p class="text-muted">Offered</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-brown set-icon">
                <i class="fa fa-tasks"></i>
            </span>
            <div class "text-box">
                <p class="main-text">3 Pending</p>
                <p class="text-muted">Approvals</p>
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue">
                <i class="fa fa-exclamation-triangle"></i>
            </span>
            <div class="text-box">
                <p class="main-text">52 Issues to Resolve</p>
                <p class="text-muted">Urgent</p>
                <p class="text-muted">Remaining Time: 30 mins</p>
                <hr />
                <p class="text-muted">
                    <span class="text-muted color-bottom-txt">
                        <i class="fa fa-edit"></i>
                        Please address these issues to ensure smooth operation.
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel back-dash">
            <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Performance</strong>
            <p class="text-muted">Review and optimize school performance for the best results.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="main-temp-back">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Weather Forecast </div>
                        <div class="col-xs-6">
                            <div class="text-temp"> 20°C </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- /. ROW  -->

<!-- /. ROW  -->
<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-comments-o fa-5x"></i>
                <h4>200 New Comments</h4>
                <h4>See All Comments</h4>
            </div>
            <div class="panel-footer back-footer-green">
                <i class="fa fa-rocket fa-5x"></i>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-hdd-o fa-5x"></i>
                <h3>120 GB Free</h3>
            </div>
            <div class="panel-footer back-footer-green">
                Disk Space Available
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder bg-color-red">
            <div class="panel-body">
                <i class="fa fa-list fa-5x"></i>
                <h3>20,000+</h3>
            </div>
            <div class="panel-footer back-footer-red">
                Pending Tasks
            </div>
        </div>
    </div>
<!-- /. ROW -->
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="chat-panel panel panel-default chat-boder chat-panel-head">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>
                School Chat
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu slidedown">
                        <li>
                            <a href="#">
                                <i class="fa fa-refresh fa-fw"></i>Refresh
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-circle fa-fw"></i>Available
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-times fa-fw"></i>Busy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o fa-fw"></i>Away
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out fa-fw"></i>Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <ul class="chat-box">
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="assets/img/user1.png" alt="User" class="img-circle" />
                        </span>
                        <div class="chat-body">
                            <strong>Principal Smith</strong>
                            <small class="pull-right text-muted">
                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                            </small>
                            <p>
                                Welcome to the international school admin dashboard!
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="assets/img/user2.png" alt="User" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <small class=" text-muted">
                                <i class="fa fa-clock-o fa-fw"></i>13 mins ago
                            </small>
                            <strong class="pull-right">You</strong>
                            <p>
                                Thank you! We're excited to get started.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message to send..." />
                    <span class="input-group-btn">
                        <button class="btn btn-warning btn-sm" id="btn-chat">
                            Send
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
   
<!-- /. ROW -->
    
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    <!-- JQUERY SCRIPTS -->
    <script src="..\Public\js\jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="..\Public\js\bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="..\Public\js\jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="..\Public\js\morris\raphael-2.1.0.min.js"></script>
    <script src="..\Public\js\morris\morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="..\Public\js\custom.js"></script>
   
</body>
</html>
