<?php
//conexion
$server = 'localhost';
$username = 'root';
$password = 'admin';
$database = 'blog';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//iniciar sesion

session_start();
