<?php
$hostname = 'localhost';
$dbname = 'Pwalugu_db';
$username = 'vra';
$password = 'vra';

$con = new mysqli($hostname,$username,$password,$dbname);

if($con==false)
{
    die('Connection error: please try again '.$con->connect_error);
}


?>