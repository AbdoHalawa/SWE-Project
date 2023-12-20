<?php
require_once(__DIR__ . '/../../model/SubjectModel.php');

$subjectModel = new SubjectModel();
$subjects = $subjectModel->getSubjects();
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
?>
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['deleteSuccess']) && $_GET['deleteSuccess'] == 1) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Subject deleted successfully!');
            });
          </script>";
}
?>
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
                        <h3 class="page-title">Subjects</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../AdminView/adminIndex.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Subjects</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">

                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="../AdminView/addSubjects.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                            <th>Number of students</th>
                                            <th>list of students</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($subjects as $subject) : ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td><?php echo $subject['SubjectID']; ?></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <?php echo $subject['SubjectName']; ?>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <?php echo $subject['NumberOfStudents']; ?> students
                                                </td>
                                                <td>
                                                    <?php echo $subject['StudentList']; ?>
                                                </td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <form action="../../controller/SubjectController.php?action=deleteSubject" method="post">
                                                            <input type="hidden" name="subjectId" value="<?php echo $subject['SubjectID']; ?>">
                                                            <input type="hidden" name="action" value="deleteSubject">
                                                            <button type="submit" class="btn btn-sm bg-success-light me-2">
                                                                Delete
                                                            </button>
                                                        </form>
                                                        <a href="./editSubjects.php?subjectId=<?php echo $subject['SubjectID']; ?>" class="btn btn-sm bg-danger-light">
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