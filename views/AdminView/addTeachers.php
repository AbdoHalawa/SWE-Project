<?php
require_once( '../../controller/TeachersController.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="..\views\AdminView\assets\img\favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="assets\plugins\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\feather\feather.css">
    <link rel="stylesheet" href="assets\plugins\icons\flags\flags.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    
</head>

<body>

<?php
include "adminNav.php";
?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form method="POST" action="../../controller/TeachersController.php?action=addTeacher">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Teacher ID <span class="login-danger">*</span></label>
<input name="teacherId" type="text" class="form-control" placeholder="Teacher ID" id="teacher_id">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Name <span class="login-danger">*</span></label>
<input name="teacherName"type="text" class="form-control" placeholder="Enter Name" id="teacher_name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input name="DOB"class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Mobile <span class="login-danger">*</span></label>
<input name="mobile"type="text" class="form-control" placeholder="Enter Phone">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Joining Date <span class="login-danger">*</span></label>
<input name="joiningDate" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
 <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Experience <span class="login-danger">*</span></label>
<input name="experience"class="form-control" type="text" placeholder="Enter Experience">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Head Teacher</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
        <div class="form-check">
            <input name="teacherType" value="Head" class="form-check-input" type="radio" id="headTeacherYes" >
            <label  class="form-check-label" for="headTeacherYes">
                Yes
            </label>
        </div>
</div>
        <div class="form-group local-forms">
        <div class="form-check">
            <input name="teacherType" value="normal" class="form-check-input" type="radio" id="headTeacherNo" >
            <label class="form-check-label" for="headTeacherNo">
                No
            </label>
        </div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Login Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Email ID <span class="login-danger">*</span></label>
<input name="email" type="email" class="form-control" placeholder="Enter Mail Id">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Password <span class="login-danger">*</span></label>
<input name="password" type="text" class="form-control" placeholder="Enter Password">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
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

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
    function validateForm() {
        // Get form input values
        var teacherID = document.getElementById('teacher_id').value.trim();
        var teacherName = document.getElementById('teacher_name').value.trim();
        // Other field values...

        // Validation checks
        if (teacherID === '') {
            alert('Please enter Teacher ID');
            return false;
        }

        if (teacherName === '') {
            alert('Please enter Teacher Name');
            return false;
        }

        

        // Add more validation checks for other fields as needed

        return true; // If all validations pass, allow form submission
    }
</script>

</body>
</html>
