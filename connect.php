<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$db = 'event';

$con = mysqli_connect($hostname, $user, $password, $db);
if(!$con){
    die('Connection Error'.mysqli_connect.error());
}

?>