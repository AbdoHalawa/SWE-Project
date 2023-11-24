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
<?php
include "../views/partials/adminNav.php";
?>

<body>
<style>
        .btn-container {
            margin-bottom: 10px;
        }

        .toggle-form {
            display: none;
        }

        .btn-toggle {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-toggle:hover {
            background-color: #45a049;
        }
    </style>

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
   
<div class="panel panel-default">
                        <div class="panel-heading">
                           
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
                    <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>Admin Panel</h2>
        </div>
    </div>
    <hr />

    <!-- Add/Edit/Delete Buttons -->
    <div class="btn-container">
        <button class="btn-toggle" onclick="toggleForm('editForm')">Edit Student</button>
        <button class="btn-toggle" onclick="toggleForm('addForm')">Add Student</button>
        <button class="btn-toggle" onclick="toggleForm('deleteForm')">Delete Student</button>
    </div>
    <div class="row toggle-form" id="editForm">
        <div class="col-md-6">
    
        <div class="row">
                        <div class="col-md-6">
                            <h3>Edit Student</h3>
                            <form role="form" action="edit_student.php" method="post">
                                <div class="form-group">
                                    <label>Select Student to Edit</label>
                                    <select name="student" class="form-control">
                                        <option>John Doe</option>
                                        <option>Jane Smith</option>
                                        <!-- Add more students here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Edit Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="New Email" />
                                </div>
                                <div class "form-group">
                                    <label>Edit Class</label>
                                    <select name="class" class="form-control">
                                        <option>Class 5A</option>
                                        <option>Class 4B</option>
                                        <!-- Add more classes here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Edit Class Teacher</label>
                                    <select name="class_teacher" class="form-control">
                                        <option>Teacher A</option>
                                        <option>Teacher B</option>
                                        <!-- Add more teachers here as class teachers -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Edit Current Grade</label>
                                    <input type="text" name="current_grade" class="form-control" placeholder="New Current Grade" />
                                </div>
                                <div class="form-group">
                                    <label>Edit Next Year's Class</label>
                                    <input type="text" name="next_year_class" class="form-control" placeholder="New Next Year's Class" />
                                </div>
                                <button type="submit" class="btn btn-default">Update Student</button>
                            </form>
                        </div>
                    </div>


        <div class="row toggle-form" id="addForm">
        <div class="col-md-6">
            <h3>Add Teacher</h3>
            <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-6">
                            <h3>Add Student</h3>
                            <form role="form" action="add_student.php" method="post">
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" name="student_name" class="form-control" placeholder="Student's Name" />
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class" class="form-control">
                                        <option>Class 5A</option>
                                        <option>Class 4B</option>
                                        <!-- Add more classes here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Class Teacher</label>
                                    <select name="class_teacher" class="form-control">
                                        <option>Teacher A</option>
                                        <option>Teacher B</option>
                                        <!-- Add more teachers here as class teachers -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Current Grade</label>
                                    <input type="text" name="current_grade" class="form-control" placeholder="Current Grade" />
                                </div>
                                <div class="form-group">
                                    <label>Next Year's Class</label>
                                    <input type="text" name="next_year_class" class="form-control" placeholder="Next Year's Class" />
                                </div>
                                <!-- Add more fields for student information -->
                                <button type="submit" class="btn btn-default">Add Student</button>
                            </form>
                        </div>
                    </div>

                    <div class="row toggle-form" id="deleteForm">
        <div class="col-md-6">
    
        <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-6">
                            <h3>Delete Student</h3>
                            <form role="form" action="delete_student.php" method="post">
                                <div class="form-group">
                                    <label>Select Student to Delete</label>
                                    <select name="student" class="form-control">
                                        <option>John Doe</option>
                                        <option>Jane Smith</option>
                                        <!-- Add more students here -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger">Delete Student</button>
                            </form>
                        </div>
                    </div>
                </div>  
                </div>  
                    <script>
        function toggleForm(formId) {
            var forms = document.querySelectorAll('.toggle-form');
            forms.forEach(function(form) {
                form.style.display = (form.id === formId) ? 'block' : 'none';
            });
        }
    </script>

    
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