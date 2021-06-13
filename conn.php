<?php 
    session_start();
    $server = "localhost";
    $username = "root";
    $db_name = "wisata";
    $pass = "";

    $conn = mysqli_connect($server, $username, "", $db_name);