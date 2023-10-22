<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin control panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="..\Public/CSS/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="..\Public/CSS/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="..\Public/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="..\Public\CSS\custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a href="admiNindex.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
              
                    <li>
                        <a class="active-menu" href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Academic Performance</a>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-table fa-3x"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>              
              <!-- /. ROW  -->
<hr />
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
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-calendar"></i>
            </span>
            <div class="text-box">
                <p class="main-text">Events</p>
                <p class="text-muted">Upcoming</p>
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Student Enrollment Statistics
            </div>
            <div class="panel-body">
                <div id="morris-bar-chart"></div>
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
</div>
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
    <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Teacher Performance
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Subject Taught</th>
                                <th>Class</th>
                                <th>Performance Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lisa Anderson</td>
                                <td>Mathematics</td>
                                <td>Class 8</td>
                                <td>Excellent</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>John Smith</td>
                                <td>Science</td>
                                <td>Class 7</td>
                                <td>Good</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mary Johnson</td>
                                <td>English</td>
                                <td>Class 9</td>
                                <td>Excellent</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>David Wilson</td>
                                <td>History</td>
                                <td>Class 10</td>
                                <td>Very Good</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Upcoming Events
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Event Name</th>
                                <th>Location</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-11-15</td>
                                <td>Parent-Teacher Conference</td>
                                <td>Conference Hall</td>
                                <td>Discuss student progress</td>
                            </tr>
                            <tr>
                                <td>2023-12-05</td>
                                <td>School Open House</td>
                                <td>Campus Auditorium</td>
                                <td>Welcome prospective students</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
