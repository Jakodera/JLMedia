<?php

$host = "localhost";
$user = "u791916609_joylink";
$pass = "Jakodera5.";
$db = "u791916609_joylink";

// Creating a connection to the DataBase
$con = mysqli_connect($host,$user,$pass,$db);
if (!$con) {
  die("Database Connection Error");
}