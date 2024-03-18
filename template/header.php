<?php

    session_start();
    //mengatasi jika user langsung masuk menggunakan link tanpa login
    if(empty($_SESSION['id_user']) or empty($_SESSION['username']))
    {
        echo "<script>
                alert('Maaf untuk mengakses halaman ini, silahkan login terlebih dahulu..!!');
                document.location='index.php';
              </script>";
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>E-Arsip | DJKNIII</title>
  </head>
  <body>
    <!-- Awal Nav / Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
                <img src="assets/img/DJKN.jpg" width="50" height="50" alt="">
        </a>
        <div class="container">
        <a class="navbar-brand" href="?">E-Arsip</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=departemen">Data Departemen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=pengirim_surat">Data Pengirim Surat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=arsip_surat">Data Arsip Surat</a>
            </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
          
            </form>
        </div>
        </div>
    </nav>
    
    <!-- Akhir Nav/Menu -->

    <!-- Awal Container -->
    <div class="container">