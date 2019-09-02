<?php
$hostname = 'localhost';
$dbname = 'Pwalugu_db';
$username = 'vra';
$password = 'vra';

//Object-oriented connection
$con = new mysqli($hostname,$username,$password,$dbname);

if($con==false)
{
    die('Connection error: please try again '.$con->connect_error);
}

//Procedural connection
$connect  = mysqli_connect($hostname,$username,$password,$dbname);
?>

