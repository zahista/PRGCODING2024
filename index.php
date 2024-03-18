<?php 


declare(strict_types=1);

use PDO;


error_reporting(E_ALL);
ini_set("display_errors", 1);

$number = 1;

$pravda = true;
$pravda = false;


$pole = ["Tomáš", "Martin", "Emma"];

$pole = [1, 3, 5, 7];
$pole = [1, "2", '4', 7];

echo "Tomáš";

echo $pole;

var_dump($pole);

const MOJE_KONSTANTA = 100;


function mojeFunkce(){
    echo "Ahoj světe já jsem funkce <br><br>";
} 

function pozdrav(string|int $jmeno)
{
    echo "Ahoj".$jmeno."<br><br>";
}


echo "<br>";


pozdrav(jmeno: "Tomáš");



mojeFunkce();
mojeFunkce();
mojeFunkce();
mojeFunkce();
mojeFunkce();
mojeFunkce();



$asoc_pole = [
    'jmeno' => 'Petr', 
    'vek' => 30, 
    'zamestnani' => 'Programátor',
];

$index_pole = ['Tomáš', 'Martin', 'Emma'];

$multi_pole = [
    [
        'jmeno' => 'Petr', 
        'vek' => 30, 
        'zamestnani' => 'Programátor'
    ],
   [
        'jmeno' => 'Martin', 
        'vek' => 20, 
        'zamestnani' => 'Designer'
    ],
];


echo $asoc_pole['jmeno']; //Petr
echo $index_pole[1]; // Martin
echo $multi_pole[0]['zamestnani']; //Programator;



echo "<pre>";
var_dump(array_column($multi_pole, 'jmeno'));
echo "</pre>";


foreach($multi_pole as $klic => $hodnota)
{
    $nove_pole_jmen[] = $hodnota['jmeno'];
}

echo "<pre>";
var_dump($nove_pole_jmen);
echo "</pre>";


// protože DB server běží na našem počítači
$dsn = "mysql:dbname=todoapp;host=127.0.0.1";
$jmeno = "root";
$heslo = "";

// Vytvořené připojení je dobré si někam uložit, vytváření vypadá
// jako volání funkce, ale všimněte si klíčového slova new - to
// nám napovídá že vytváříme nový Objekt (více o OOP později)
$pripojeni = new PDO($dsn, $jmeno, $heslo, array(
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

var_dump($pripojeni);

$mysqli = new mysqli("127.0.0.1","root","","todoapp");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

var_dump($mysqli);