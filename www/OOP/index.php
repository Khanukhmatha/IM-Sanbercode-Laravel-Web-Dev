<?php 
// Bentuk fungsi
require_once ('animal.php');
require_once("frog.php");
require_once("ape.php");

// Bentuk statement
// require_once 'includes/header.php';
$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "Legs : " . $sheep->legs . "<br>"; // 4
echo "Cold bloaded : " . $sheep->cold_blooded . "<br> <br>"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$frog = new Frog("buduk");
echo "Name : " . $frog->name . "<br>"; // "shaun"
echo "Legs : " . $frog->legs . "<br>"; // 4
echo "Cold bloaded : " . $frog->cold_blooded . "<br>"; // "no"
echo "Jump : " . $frog->jump() . "<br>";

$ape = new Ape("kera sakti");
echo "Name : " . $ape->name . "<br>"; // "shaun"
echo "Legs : " . $ape->legs . "<br>"; // 4
echo "Cold bloaded : " . $ape->cold_blooded . "<br> "; // "no"
echo "Yell : " . $ape->yell() . "<br>";

?>