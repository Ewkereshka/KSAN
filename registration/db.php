<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
} else {
    "Успех";
}?>