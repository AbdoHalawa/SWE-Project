<?php
include("../../Public/js/validations.js");
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
                                            <label>Subject ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="subjectID">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Subject Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="subjectName">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Teacher Id <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="teacherId">
                                        </div>
                                    </div>
                                    <div class="row">
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

    <script src="assets/js/script.js"></script>
    <script>
        function camelcaseToNormalString(word) {
    var normalString = word.replace(/([a-z])([A-Z])/g, "$1 $2");
    return normalString.toLowerCase();
  }
  
  function capitalizeFirstLetter(sentence) {
    var words = sentence.split(" "); // Split the sentence into an array of words
    var capitalizedWords = words.map(function (word) {
      return word.charAt(0).toUpperCase() + word.slice(1);
    });
    return capitalizedWords.join(" "); // Join the words into a sentence
  }
  
  function emailValidation(input) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // email validation
    return emailRegex.test(input.value) ? false : "Invalid Email";
  }
  function usernameValidation(input) {
    const usernameRegex = /^[a-zA-Z0-9_-]{3,16}$/; //username validationconst
    return usernameRegex.test(input.value) ? false : "Invalid Username";
  }
  
  function passwordValidation(input) {
    if (input.value.length < 8)
      return "Password should be at least 8 characters long.";
  
    let hasUppercase = /[A-Z]/.test(input.value);
    let hasLowercase = /[a-z]/.test(input.value);
    let hasNumeric = /[0-9]/.test(input.value);
  
    if (!hasUppercase || !hasLowercase || !hasNumeric)
      return "Password should contain at least one uppercase letter, one lowercase letter, and one numeric digit.";
  
    let hasSpecialChar = /[^A-Za-z0-9]/.test(input.value);
  
    if (!hasSpecialChar)
      return "Password should contain at least one special character.";
  
    return false;
  }
  
  export function validateForm(form) {
   // return false; //turn off validation
    let errorMessage;
    let pwd;
    for (let input of Array.from(form.elements)) {
      if (
        input.value === "" &&
        input.type !== "submit" &&
        input.type !== "reset" &&
        input.hasAttribute("name")
      ) {
        errorMessage = camelcaseToNormalString(input.name);
        errorMessage = capitalizeFirstLetter(errorMessage);
        return errorMessage + " is required";
      }
    }
    for (let input of Array.from(form.elements)) {
      if (input.name === "username") {
        errorMessage = usernameValidation(input);
        if (errorMessage) return errorMessage;
      }
      if (input.name === "email") {
        errorMessage = emailValidation(input);
        if (errorMessage) return errorMessage;
      }
      if (input.name === "password") {
        errorMessage = passwordValidation(input);
        pwd = input.value;
        if (errorMessage) return errorMessage;
      }
      if (input.name === "confirmPassword") {
        let cPwd = input.value;
        return pwd === cPwd ? "" : "Passwords are not the same";
      }
    }
  }
  
    </script>
    <script>
        const form = document.getElementById('form');
        const error = document.getElementById("error");
    
        const errorMsg = validateForm(form);
        if (errorMsg) return (error.innerHTML = errorMsg);

    </script>
</body>

</html>