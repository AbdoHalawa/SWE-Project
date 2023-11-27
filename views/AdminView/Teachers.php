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

<div class="panel panel-default">
                        <div class="panel-heading">
                             Teahers table
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
 
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>Admin Panel</h2>
        </div>
    </div>
    <hr />

    <!-- Add/Edit/Delete Buttons -->
    <div class="btn-container">
        <button class="btn-toggle" onclick="toggleForm('editForm')">Edit Teacher</button>
        <button class="btn-toggle" onclick="toggleForm('addForm')">Add Teacher</button>
        <button class="btn-toggle" onclick="toggleForm('deleteForm')">Delete Teacher</button>
    </div>

    <!-- Teacher Management Form for Editing -->
    <div class="row toggle-form" id="editForm">
        <div class="col-md-6">
            <h3>Edit Teacher</h3>
            <div class="row">
                        <div class="col-md-6">
                            <h3>Edit Teacher</h3>
                            <form role="form" action="edit_teacher.php" method="post">
                                <div class="form-group">
                                    <label>Select Teacher to Edit</label>
                                    <select name="teacher" class="form-control">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <!-- Add more teachers here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Edit Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="New Email" />
                                </div>
                                <div class="form-group">
                                    <label>Edit Subjects</label>
                                    <input type="text" name="subjects" class="form-control" placeholder="New Subjects" />
                                </div>
                                <div class="form-group">
                                    <label>Edit Coordinator</label>
                                    <select name="coordinator" class="form-control">
                                        <option>Coordinator A</option>
                                        <option>Coordinator B</option>
                                        <!-- Add more coordinators here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Is Class Teacher?</label>
                                    <input type="radio" name="class_teacher" value="Yes" /> Yes
                                    <input type="radio" name="class_teacher" value="No" /> No
                                </div>
                                <button type="submit" class="btn btn-default">Update Teacher</button>
                            </form>
                        </div>
                    </div>

        </div>
    </div>

    <!-- Teacher Management Form for Adding -->
    <div class="row toggle-form" id="addForm">
        <div class="col-md-6">
            <h3>Add Teacher</h3>
            <div class="row">
                        <div class="col-md-6">
                            <h3>Add Teacher</h3>
                            <form role="form" action="add_teacher.php" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Teacher's Name" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Teacher's Email" />
                                </div>
                                <!-- Add more fields for teacher information -->
                                <button type="submit" class="btn btn-default">Add Teacher</button>
                            </form>
                        </div>
                    </div>
        </div>
    </div>

    <!-- Teacher Management Form for Deleting -->
    <div class="row toggle-form" id="deleteForm">
        <div class="col-md-6">
            <h3>Delete Teacher</h3>
            <div class="row">
                        <div class="col-md-6">
                            <h3>Delete Teacher</h3>
                            <form role="form" action="delete_teacher.php" method="post">
                                <div class="form-group">
                                    <label>Select Teacher to Delete</label>
                                    <select name="teacher" class="form-control">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <!-- Add more teachers here -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger">Delete Teacher</button>
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