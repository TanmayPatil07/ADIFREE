<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";


// Create a database connection
//$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);


 if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("Failed to connect!");
}