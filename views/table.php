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
   <link rel="stylesheet" href="../public/css/nav.css">
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
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
            <!-- /. NAV TOP  -->
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
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Students Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Class</th>
                                            <th>Class Teacher</th>
                                            <th>Current Grade</th>
                                            <th>Next Year's Class</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Sample Student Data -->
                                        <tr class="odd gradeX">
                                            <td>John Doe</td>
                                            <td>john.doe@nefertari.eg.com</td>
                                            <td>Class 5A</td>
                                            <td>Teacher A</td>
                                            <td>85</td>
                                            <td>Class 6A</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Jane Smith</td>
                                            <td>jane.smith@nefertari.eg.com</td>
                                            <td>Class 4B</td>
                                            <td>Teacher B</td>
                                            <td>92</td>
                                            <td>Class 5B</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Farah Mohamed</td>
                                            <td>farah.moh@nefertari.eg.com</td>
                                            <td>Class 5A</td>
                                            <td>Teacher A</td>
                                            <td>85</td>
                                            <td>Class 6A</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Nour Hesham</td>
                                            <td>nour.hesho@nefertari.eg.com</td>
                                            <td>Class 4B</td>
                                            <td>Teacher B</td>
                                            <td>92</td>
                                            <td>Class 5B</td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                   
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Teahers Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Subjects</th>
                                            <th>Coordinator</th>
                                            <th>Class Teacher</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Sample Teacher Data -->
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>teacher1@nefertari.teach.eg</td>
                                            <td>Math, Science</td>
                                            <td>Coordinator A</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
                                            <td>teacher2@nefertari.teach.eg</td>
                                            <td>English, History</td>
                                            <td>Coordinator B</td>
                                            <td>No</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>3</td>
                                            <td>teacher3@nefertari.teach.eg</td>
                                            <td>Art, Music</td>
                                            <td>Coordinator A</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>4</td>
                                            <td>teacher4@nefertari.teach.eg</td>
                                            <td>Physics, Chemistry</td>
                                            <td>Coordinator C</td>
                                            <td>Yes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                <div class="col-md-12">
                    <!-- Advanced Tables (Students with Medical Issues) -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Students with Medical Issues
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="medicalStudentsTable">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Class</th>
                                            <th>Class Teacher</th>
                                            <th>Medical Issue</th>
                                            <th>Doctor's Prescription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Sample Student Data with Medical Issues -->
                                        <tr class="odd gradeX">
                                            <td>Alice Johnson</td>
                                            <td>alice.johnson@nefertari.eg.com</td>
                                            <td>Class 5A</td>
                                            <td>Teacher A</td>
                                            <td>Asthma</td>
                                            <td>Use inhaler as needed</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Bob Davis</td>
                                            <td>bob.davis@nefertari.eg.com</td>
                                            <td>Class 4B</td>
                                            <td>Teacher B</td>
                                            <td>Allergies</td>
                                            <td>Avoid allergens and take antihistamines</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Claire Adams</td>
                                            <td>claire.adams@nefertari.eg.com</td>
                                            <td>Class 5A</td>
                                            <td>Teacher A</td>
                                            <td>Diabetes</td>
                                            <td>Insulin injection before meals</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>David Miller</td>
                                            <td>david.miller@nefertari.eg.com</td>
                                            <td>Class 4B</td>
                                            <td>Teacher B</td>
                                            <td>Food Allergies</td>
                                            <td>Avoid specific allergenic foods</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Advanced Tables (Students with Medical Issues) -->
                </div>
                
            </div>
                
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
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
    
     <!-- DATA TABLE SCRIPTS -->
    <script src="..\Public\js\dataTables\jquery.dataTables.js"></script>
    <script src="..\Public\js\dataTables\dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                $('#dataTables-example2').DataTable(); 
                $('#medicalStudentsTable').DataTable();
            });
    </script>
    <script src="..\Public\js\custom.js"></script>
   
</body>
</html>
