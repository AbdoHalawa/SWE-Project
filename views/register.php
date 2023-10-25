<?php
// Database connection parameters
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

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

    // Hash the password (you should use a more secure method)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (username, email, password, occupation) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $hashed_password, $occupation);

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
