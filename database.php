<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todoapp";


$database = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

///---------------------------------------------------------------------


$result  = $database->query('SELECT * from todos');

$row = $result->fetch_all(MYSQLI_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";




