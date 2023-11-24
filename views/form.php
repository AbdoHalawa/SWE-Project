﻿<!DOCTYPE html>
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
<?php
include "../views/partials/adminNav.php";
?>

<body>
  

                <!-- School Admin Panel form -->
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>School Admin Panel</h2>
                        </div>
                    </div>
                    <hr />

                    <!-- Teacher Management Form for Editing -->
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

                    <!-- Teacher Management Form for Adding -->
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

                    <!-- Teacher Management Form for Deleting -->
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

                    <!-- Subject Management Form for Editing -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Edit Subject and Coordinator</h3>
                            <form role="form" action="edit_subject.php" method="post">
                                <div class="form-group">
                                    <label>Select Subject to Edit</label>
                                    <select name="subject" class="form-control">
                                        <option>Subject 1</option>
                                        <option>Subject 2</option>
                                        <!-- Add more subjects here -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Edit Subject Coordinator</label>
                                    <select name="coordinator" class="form-control">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <!-- Add more teachers here as coordinators -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Update Subject and Coordinator</button>
                            </form>
                        </div>
                    </div>

                    <!-- Subject Management Form for Adding -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Add Subject</h3>
                            <form role="form" action="add_subject.php" method="post">
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <input type="text" name="subject_name" class="form-control" placeholder="New Subject Name" />
                                </div>
                                <div class="form-group">
                                    <label>Coordinator</label>
                                    <select name="coordinator" class="form-control">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <!-- Add more teachers here as coordinators -->
                                    </select>
                                </div>
                                <!-- Add more fields for subject information -->
                                <button type="submit" class="btn btn-default">Add Subject</button>
                            </form>
                        </div>
                    </div>

                    <!-- Subject Management Form for Deleting -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Delete Subject</h3>
                            <form role="form" action="delete_subject.php" method="post">
                                <div class="form-group">
                                    <label>Select Subject to Delete</label>
                                    <select name="subject" class="form-control">
                                        <option>Subject 1</option>
                                        <option>Subject 2</option>
                                        <!-- Add more subjects here -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger">Delete Subject</button>
                            </form>
                        </div>
                    </div>

                    <!-- Student Management Form for Editing -->
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

                    <!-- Student Management Form for Adding -->
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

                    <!-- Student Management Form for Deleting -->
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
                <!-- /. PAGE INNER -->
            </div>
            <!-- /. PAGE WRAPPER -->
        </div>
        <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
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
    <script src="..\Public\js\custom.js"></script>
</body>

</html>
