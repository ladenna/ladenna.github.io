<?php

//buat koneksi database
//persiapan identiias server

$server = "localhost"; //nama server
$user = "root"; //username dari database server
$pass = ""; //password database server
$database = "dbersip"; //nama database

//koneksi database
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));



?>