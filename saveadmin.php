<?php

# FileName="save.php"
$hostname = "localhost";
$database = "helpFlames";
$username = "root";
$password = "";


$ANSWER=filter_var($_POST['ANSWER'],FILTER_SANITIZE_STRING);
$POST_ID=$_POST['POST_ID'];


// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE hp_questions SET ANSWER='$ANSWER' WHERE POST_ID='$POST_ID';";

if (mysqli_query($conn, $sql)) {
    echo "Your answer has been added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>