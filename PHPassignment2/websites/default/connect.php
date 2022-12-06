<?php
//connect to the database
$server = 'db';
$username = 'student';
$password = 'student';
$schema = 'cars';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server , $username , $password);
?>


