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
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://kit.fontawesome.com/f17a435b32.js" crossorigin="anonymous"></script>
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
                <a class="navbar-brand" href="index.html">Binary Admin</a>
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
                        <img src="..\Public\imgs\find_user(admin).png" class="user-image img-responsive" />
                    </li>
                    <li>

                        <a href="admiNindex.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
              
                    <li>
                        <a class="active-menu" href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Academic Performance</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table fa-3x"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>CHARTS</h2>
                        <h5>Welcome John Doe, view students' academic performance throughout the year.</h5>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Student Academic Performance
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>
    </div>

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

    <!-- Replace the following script with your data for Morris charts -->
    <script>
        // Replace this data with your academic performance data
        var academicData = [
            { year: 'January', grade: 85 },
            { year: 'February', grade: 78 },
            { year: 'March', grade: 92 },
            // Add more data points here
        ];

        Morris.Bar({
            element: 'morris-bar-chart',
            data: academicData,
            xkey: 'year',
            ykeys: ['grade'],
            labels: ['Grade'],
            hideHover: 'auto',
            resize: true
        });

        Morris.Donut({
            element: 'morris-donut-chart',
            data: [
                { label: 'Pass', value: 75 },
                { label: 'Fail', value: 25 },
                // Add more data points here
            ],
            resize: true
        });
    </script>
</body>
</html>
