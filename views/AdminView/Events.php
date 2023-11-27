
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
<div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-calendar"></i>
            </span>
            <div class="text-box">
                <p class="main-text">Events</p>
                <p class="text-muted">Upcoming</p>
            </div>
        </div> <div class="col-md-6 col-sm-12 col-xs-12">
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
</body>