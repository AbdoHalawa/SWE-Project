<?php
require_once(__DIR__ . '/../../model/TeacherModel.php');
if (isset($_GET['teacherId'])) {
    $teacherId = $_GET['teacherId'];
    $teacher = TeacherModel::getTeacherById($teacherId);
}

// Check if the teacher exists
if ($teacher) {
    $teacherName = $teacher['TeacherName'];
    $gender = $teacher['Gender'];
    $DOB = $teacher['DateOfBirth'];
    $phoneNumber = $teacher['PhoneNumber'];
    $joiningDate = $teacher['JoiningDate'];
    $experience = $teacher['Experience'];
    $email = $teacher['Email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="..\views\AdminView\assets\img\favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
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
                        <h3 class="page-title">Edit Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="listTeachers.php">Teachers</a></li>
                            <li class="breadcrumb-item active">Edit Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="../../controller/TeachersController.php?action=editTeacher">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Basic Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Teacher ID <span class="login-danger">*</span></label>
                                            <input name="teacherId" type="text" class="form-control" value=<?php echo $teacherId ?> readonly style="background-color: white;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input name="teacherName" type="text" class="form-control" value=<?php echo $teacherName ?>>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="gender">
                                                <option  value="male"<?php if ($gender === 'Male') echo 'selected'; ?>>Male</option>
                                                <option value="female" <?php if ($gender === 'Female') echo 'selected'; ?>>Female</option>
                                                <option value="others"<?php if ($gender === 'Others') echo 'selected'; ?>>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input name="DOB" class="form-control datetimepicker" type="text" placeholder=<?php echo $DOB ?>>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Mobile <span class="login-danger">*</span></label>
                                            <input name="mobile" type="text" class="form-control" value=<?php echo $phoneNumber ?>>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Joining Date <span class="login-danger">*</span></label>
                                            <input name="joiningDate"class="form-control datetimepicker" type="text" placeholder=<?php echo $joiningDate ?>>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Experience <span class="login-danger">*</span></label>
                                            <input name="experience"class="form-control" type="text" value=<?php echo $experience ?>>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Login Details</span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Email ID <span class="login-danger">*</span></label>
                                            <input name="email" type="email" class="form-control" value=<?php echo $email ?>>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-primary">Delete</button>
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

    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>