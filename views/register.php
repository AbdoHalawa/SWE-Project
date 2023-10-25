<?php
// Database connection parameters

$servername = "localhost";
$username = "root";
$password = "";
$DB = "swe-project";

$conn = mysqli_connect($servername,$username,$password,$DB);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $occupation = $_POST["occupation"];

   

    // Insert data into the database
    $sql = "INSERT INTO users (username, email,  occupation, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $occupation, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
