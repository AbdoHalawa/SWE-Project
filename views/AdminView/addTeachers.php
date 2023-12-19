<?php
require_once('../../controller/TeachersController.php');

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
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Teacher added successfully');
            });
          </script>";
} else if (isset($_GET['exists']) && $_GET['exists'] == 1) {
    echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('Teacher exists');
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
                        <h3 class="page-title">Add Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../AdminView/listTeachers.php">Teachers</a></li>
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
                                            <input name="teacherName" type="text" class="form-control" placeholder="Enter Name" id="teacher_name">
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
                                            <input name="DOB" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Mobile <span class="login-danger">*</span></label>
                                            <input name="mobile" type="text" class="form-control" placeholder="Enter Phone">
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
                                            <input name="experience" class="form-control" type="text" placeholder="Enter Experience">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Head Teacher</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <div class="form-check">
                                                <input name="teacherType" value="Head" class="form-check-input" type="radio" id="headTeacherYes">
                                                <label class="form-check-label" for="headTeacherYes">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group local-forms">
                                            <div class="form-check">
                                                <input name="teacherType" value="normal" class="form-check-input" type="radio" id="headTeacherNo">
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
                                                <input name="email" type="email" id="email" class="form-control" placeholder="Enter Mail Id">
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
    <script>
    function generateID(prefix) {
        const validCharacters = '0123456789';
        const randomIDArray = new Uint32Array(5);
        crypto.getRandomValues(randomIDArray);

        let generatedID = prefix;
        for (let i = 0; i < randomIDArray.length; i++) {
            const randomNum = randomIDArray[i] % validCharacters.length;
            generatedID += validCharacters.charAt(randomNum);
        }

        // Ensure the generated ID has exactly 5 digits
        generatedID = generatedID.slice(0, 5);

        return generatedID;
    }

    function generateTeacherID() {
        const teacherID = generateID('30');
        document.getElementById('teacher_id').value = teacherID;
    }

    function generateTeacherEmail() {
        // Get the values from the form
        const teacherName = document.getElementById('teacher_name').value.trim();
        const teacherID = document.getElementById('teacher_id').value;

        // Check if both teacher name and teacher ID are not empty
        if (teacherName && teacherID) {
            // Generate the teacher email
            const teacherEmail = `${teacherName.toLowerCase()}${teacherID}@nefertari.com`;

            // Set the generated email to the corresponding input field
            document.getElementById('email').value = teacherEmail;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Attach event listeners after the DOM is fully loaded
        document.getElementById('teacher_name').addEventListener('input', generateTeacherEmail);
        generateTeacherID();
        generateTeacherEmail();
    });
</script>

</body>

</html>