<?php 


$heslo = "Heslo";

$pass1 =  password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$pass2 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

echo $pass1."<br>".$pass2;

echo "<br>";

var_dump(password_verify($heslo,$pass1));