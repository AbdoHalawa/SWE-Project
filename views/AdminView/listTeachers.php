<?php
require_once(__DIR__ . '/../../model/TeacherModel.php');
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
if (isset($_SESSION['searchResults'])) {
    $teachers = $_SESSION['searchResults'];
    // Clear the session variable
    unset($_SESSION['searchResults']);
} else {
    $teachers = TeacherModel::getTeachers();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<?php
if (isset($_GET['deleteSuccess']) && $_GET['deleteSuccess'] == 1) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Teacher deleted successfully!');
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
                        <h3 class="page-title">Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../AdminView/adminIndex.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <form method="POST" action="../../controller/TeachersController.php?action=searchTeachers">
                            <div class="form-group">
                                <input type="text" name="searchID" class="form-control" placeholder="Search by ID ...">
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" name="searchName" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" name="searchPhone" class="form-control" placeholder="Search by Phone ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Teachers</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="../AdminView/addTeachers.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date of birth</th>
                                            <th>joining date</th>
                                            <th>Mobile Number</th>
                                            <th>experience</th>
                                            <th>Email</th>
                                            <th>Teacher Type</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($teachers as $teacher) : ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td><?php echo $teacher['TeacherID']; ?></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <!-- <a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a> -->
                                                        <?php echo $teacher['TeacherName']; ?>
                                                    </h2>
                                                </td>
                                                <td><?php echo $teacher['Gender']; ?></td>
                                                <td><?php echo $teacher['DateOfBirth']; ?></td>
                                                <td><?php echo $teacher['JoiningDate']; ?></td>
                                                <td><?php echo $teacher['PhoneNumber']; ?></td>
                                                <td><?php echo $teacher['Experience']; ?></td>
                                                <td><?php echo $teacher['Email']; ?></td>
                                                <td><?php echo $teacher['TeacherType']; ?></td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <form action="../../controller/TeachersController.php?action=deleteTeacher" method="post">
                                                            <!-- ... other form inputs ... -->
                                                            <input type="hidden" name="teacherId" value="<?php echo $teacher['TeacherID']; ?>">
                                                            <button type="submit" class="btn btn-sm bg-success-light me-2">
                                                                Delete
                                                            </button>
                                                        </form>

                                                        <a href="./editTeachers.php?teacherId=<?php echo $teacher['TeacherID']; ?>" class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <p>Copyright © 2022 Dreamguys.</p>
        </footer>

    </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>