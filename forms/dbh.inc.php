<?php

//partea de conectare la server, se modifica loginsystem cu ce aveti voi pe phpmyadmin

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);