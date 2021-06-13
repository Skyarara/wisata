<?php

    require_once "../conn.php";
    
    $data = $_POST;

    $Username = strtolower(stripslashes($data["Username"]));
    $Email = $data["Email"];
    $Password = $data["Password"];

    $sql = "INSERT INTO user VALUES('', '$Username', '$Email', 0,'$Password')";
    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo mysqli_error($conn);
        exit;
    }

    header("Location: login.php");