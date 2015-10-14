<?php
# FileName="connect.php"
$hostname = "localhost";
$database = "helpFlames";
$username = "root";
$password = "";

mysql_connect($hostname , $username, $password);

mysql_select_db($database );


$selectdata = "SELECT POST_ID,TITLE,QUESTION,ANSWER,IMAGE_PATH,IS_FAQ,POST_DATE FROM hp_questions";

$query = mysql_query($selectdata);

// set array
$array = [];

while($row = mysql_fetch_assoc($query))
{
$array[]=$row;
}
 header("Content-type: application/json");
echo json_encode($array);


?>