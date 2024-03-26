<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_POST['user']))
{
    echo $_POST['user'];
}else
{
    echo "User není definován, protože nic nepřišlo postem";
}


$_POST['user'] ?? "User není definován, protože nic nepřišlo postem";

echo "<br>";
echo "<br>";

echo $_GET['user'];
