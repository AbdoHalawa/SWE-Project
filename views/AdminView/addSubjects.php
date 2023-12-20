<?php
include("../../Public/js/validations.js");
?>

<!DOCTYPE html>
<html lang="en">
<?php

// Check if the user is logged in
if (!isset($_SESSION['user_type'])) {
    // Redirect to the login page if not logged in
    header("Location: ../../views/login.php");
    exit();
}

// Check if the user is a teacher and the type is headteacher
if ($_SESSION['user_type'] !== 'Teacher' || $_SESSION['teacher_type'] !== 'Head') {
    header("Location: ../../views/unauthorized.php");
    exit();
}
// The rest of your page content goes here
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../views/AdminView/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* CSS styles */
        #error {
            color: red; /* Set text color to red */
            font-size: 18px; /* Set font size */
            font-family: Arial, sans-serif; /* Define font family */
            /* Add other styles as needed */
        }
    </style>

</head>
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Subject added successfully');
            });
          </script>";
}
if (isset($_GET['teacherNotFound']) && $_GET['teacherNotFound'] == 1) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Error: Teacher with provided ID not found');
            });
          </script>";
}
?>


<body>
    <?php
    include "adminNav.php";
    ?>

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Subject</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../AdminView/listSubjects.php">Subject</a></li>
                            <li class="breadcrumb-item active">Add Subject</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="../../controller/SubjectController.php?action=Add" id="form">
                                <p id="error" ></p>
                                <input type="hidden" name="action" value="Add">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Subject Information</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label for="subjectID">Subject ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="subjectID" id="subjectID">
                                            <span class="error-message" id="subjectID-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label for="subjectName">Subject Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="subjectName" id="subjectName">
                                            <span class="error-message" id="subjectName-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label for="teacherId">Teacher Id <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="teacherId" id="teacherId">
                                            <span class="error-message" id="teacherId-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="button" class="btn btn-primary" onclick="validateForm()">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>

    <script>
        function validateForm() {
            var subjectID = document.getElementById('subjectID').value;
            var subjectName = document.getElementById('subjectName').value;
            var teacherId = document.getElementById('teacherId').value;

            if (subjectID.trim() === '') {
                document.getElementById('subjectID-error').innerText = 'Subject ID is required.';
                document.getElementById('subjectID-error').style.color = 'red';
                return;
            } else {
                document.getElementById('subjectID-error').innerText = '';
            }

            if (subjectName.trim() === '') {
                document.getElementById('subjectName-error').innerText = 'Subject Name is required.';
                document.getElementById('subjectName-error').style.color = 'red';
                return;
            } else {
                document.getElementById('subjectName-error').innerText = '';
            }

            if (teacherId.trim() === '') {
                document.getElementById('teacherId-error').innerText = 'Teacher ID is required.';
                document.getElementById('teacherId-error').style.color = 'red';
                return;
            } else {
                document.getElementById('teacherId-error').innerText = '';
            }

            // Submit the form using JavaScript
            document.getElementById('addSubjectForm').submit();
        }
    </script>
</body>

</html>
