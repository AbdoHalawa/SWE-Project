
<!DOCTYPE html>

<html lang="en">
<?php
require_once(__DIR__ . '/../../controller/StudentsController.php');
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

if (isset($_GET['studentId'])) {
    $studentsController = new StudentsController();
    $studentId = $_GET['studentId'];
    $data = $studentsController->getStudentById($studentId);

    if ($data) {
        // Extract student and parent data
        $studentData = $data['studentData'];
        $parentData = $data['parentData'];

        // Access student data
        $firstName = $studentData['FirstName'];
        $lastName = $studentData['LastName'];
        $gender = $studentData['Gender'];
        $DOB = $studentData['DateOfBirth'];
        $religion = $studentData['Religion'];
        $grade = $studentData['Grade'];
        $classID = $studentData['ClassID'];
        $studentID = $studentData['StudentID'];
        $parentID = $studentData['ParentID'];
        $phoneNumber = $studentData['PhoneNumber'];
        $email = $studentData['Email'];
        $password = $studentData['Password'];

        // Access parent data
        $parentName = $parentData['ParentName'];
        $parentEmail = $parentData['Email'];
        $parentPassword = $parentData['Password'];

        // Now you can use these variables as needed
    } else {
        // Handle the case where student data is not found
        echo "Student not found";
    }
}
?>
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
    // Include the common header or navigation
    include "adminNav.php";
    ?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Students</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                            <li class="breadcrumb-item active">Edit Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form method="post" action="../../controller/StudentsController.php?action=editStudent">
                            <!-- Change the action attribute accordingly -->

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Student Information <span><a
                                                    href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="first_name">First Name <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" id="first_name" name="first_name"
                                               placeholder="Enter First Name"
                                               value="<?php echo isset($firstName) ? $firstName : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="last_name">Last Name <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" id="last_name" name="last_name"
                                               placeholder="Enter Last Name"
                                               value="<?php echo isset($lastName) ? $lastName : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="gender">Gender <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="gender" name="gender">
                                            <option <?php echo ($gender == 'Female') ? 'selected' : ''; ?>
                                                    value="Female">Female
                                            </option>
                                            <option <?php echo ($gender == 'Male') ? 'selected' : ''; ?> value="Male">
                                                Male
                                            </option>
                                            <option <?php echo ($gender == 'Others') ? 'selected' : ''; ?> value="Others">
                                                Others
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label for="dob">Date Of Birth <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="text" id="dob" name="dob"
                                               placeholder="DD-MM-YYYY" value="<?php echo isset($DOB) ? $DOB : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="religion">Religion <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="religion" name="religion">
                                            <option <?php echo ($religion == 'Muslim') ? 'selected' : ''; ?>
                                                    value="Muslim">Muslim
                                            </option>
                                            <option <?php echo ($religion == 'Christian') ? 'selected' : ''; ?>
                                                    value="Christian">Christian
                                            </option>
                                            <option <?php echo ($religion == 'Others') ? 'selected' : ''; ?>
                                                    value="Others">Others
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="grade">Class <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="grade" name="grade">
                                            <option <?php echo ($grade == '12') ? 'selected' : ''; ?> value="12">12
                                            </option>
                                            <option <?php echo ($grade == '11') ? 'selected' : ''; ?> value="11">11
                                            </option>
                                            <option <?php echo ($grade == '10') ? 'selected' : ''; ?> value="10">10
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="class">Section <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="class" name="class">
                                            <option <?php echo ($classID == 'A') ? 'selected' : ''; ?> value="A">A
                                            </option>
                                            <option <?php echo ($classID == 'B') ? 'selected' : ''; ?> value="B">B
                                            </option>
                                            <option <?php echo ($classID == 'C') ? 'selected' : ''; ?> value="C">C
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="admission_id">Admission ID</label>
                                        <input class="form-control" type="text" id="admission_id" name="admission_id"
                                               placeholder="Enter Admission ID"
                                               value="<?php echo isset($studentID) ? $studentID : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="parent_name">Parent's Name</label>
                                        <input class="form-control" type="text" id="parent_name" name="parent_name"
                                               placeholder="Enter The Name"
                                               value="<?php echo isset($parentName) ? $parentName : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="parent_id">Parent ID</label>
                                        <input class="form-control" type="text" id="parent_id" name="parent_id"
                                               placeholder="Enter Parent ID"
                                               value="<?php echo isset($parentID) ? $parentID : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="parent_phone">Parent's Phone</label>
                                        <input class="form-control" type="text" id="parent_phone" name="parent_phone"
                                               placeholder="Enter Phone Number"
                                               value="<?php echo isset($phoneNumber) ? $phoneNumber : ''; ?>">
                                    </div>
                                </div>

                                <div class="col-12">
                                 
        <div class="form-group local-forms">
            <input type="hidden" class="form-control" id="email" name="email"
                placeholder="Enter Mail Id"
                value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group local-forms">
            <input type="hidden" class="form-control" id="password" name="password"
                placeholder="Enter Password"
                value="<?php echo isset($password) ? $password : ''; ?>">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group local-forms">
            <input type="hidden" class="form-control" id="parent_email"
                name="parent_email" placeholder="Enter Parent Mail Id"
                value="<?php echo isset($parentEmail) ? $parentEmail : ''; ?>">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group local-forms">
            <input type="hidden" class="form-control" id="parent_password"
                name="parent_password" placeholder="Enter Parent Password"
                value="<?php echo isset($parentPassword) ? $parentPassword : ''; ?>">
        </div>
    </div>

    <div class="col-12">
        <div class="student-submit">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>
</html>
