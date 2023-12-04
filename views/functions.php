<?php
// functions.php

// functions.php

function getSubjectsForStudent()
{
    // Include your database connection file
    require_once('../../Db/Dbh.php');

    $db = new Dbh();
    $conn = $db->connect();

    // Get the student ID from the session
    $studentID = $_SESSION['user_id'];

    // Sanitize the student ID to prevent SQL injection
    $studentID = mysqli_real_escape_string($conn, $studentID);

    $query = "SELECT Subjects.SubjectID, Subjects.SubjectName
              FROM Subjects
              INNER JOIN Grades ON Subjects.SubjectID = Grades.SubjectID
              WHERE Grades.StudentID = $studentID";

    $result = mysqli_query($conn, $query);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $subjects = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $subjects[] = $row;
    }

    // Close the database connection
    mysqli_close($conn);

    return $subjects;
}


function getSubjectNameById($subjectID)
{
    // Include your database connection file
    require_once('../../Db/Dbh.php');

    $db = new Dbh();
    $conn = $db->connect();

    // Sanitize the subject ID to prevent SQL injection
    $subjectID = mysqli_real_escape_string($conn, $subjectID);

    $query = "SELECT SubjectName FROM Subjects WHERE SubjectID = $subjectID";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);

    // Close the database connection
    mysqli_close($conn);

    return $row['SubjectName'];
}
?>
