<?php

# FileName="save.php"
$hostname = "localhost";
$database = "helpFlames";
$username = "root";
$password = "";


$QUESTION=filter_var($_POST['QUESTION'], FILTER_SANITIZE_STRING);

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO hp_questions(POST_ID,QUESTION) SELECT IFNULL(MAX(CAST(POST_ID AS UNSIGNED)), 0) + 1,'$QUESTION' FROM hp_questions;";

if (mysqli_query($conn, $sql)) {
    echo "Your question has been added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>