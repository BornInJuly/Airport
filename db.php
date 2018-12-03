<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'flights';

$link = mysqli_connect($server, $user, $password, $db);
mysqli_set_charset($link, 'utf8');

?>