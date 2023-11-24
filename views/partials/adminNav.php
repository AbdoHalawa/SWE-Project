<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Your Page Title</title>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100%;
        }

        #page-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Style for the navigation bar */
        .navbar-default {
            background-color: #3498db; /* Updated background color */
            border-color: #2980b9; /* Updated border color */
            margin-bottom: 0;
            border-radius: 0; /* Optional: Add border-radius for a rounded look */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
        }

        .navbar-default .navbar-brand,
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #ecf0f1;
            font-size: 24px;
        }

        .navbar-default .navbar-nav > li > a {
            color: #ecf0f1;
            font-size: 18px;
            transition: color 0.3s ease; /* Add a smooth color transition */
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #ffffff; /* Set your desired text color on hover */
        }

        .navbar-default .navbar-nav > li.active > a,
        .navbar-default .navbar-nav > li.active > a:hover,
        .navbar-default .navbar-nav > li.active > a:focus {
            background-color: #2980b9 !important;
            color: #ecf0f1 !important;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #ecf0f1;
            }

            .navbar-default .navbar-toggle {
                border-color: #ecf0f1;
            }

            .navbar-default .navbar-toggle:hover,
            .navbar-default .navbar-toggle:focus {
                background-color: #2980b9;
            }
        }

    </style>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="admiNindex.php">Dashboard</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="Teachers.php">Teachers</a></li>
                <li><a href="Students.php">Students</a></li>
            </ul>
        </div>
    </nav>

  

</body>

</html>
