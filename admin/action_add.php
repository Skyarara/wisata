<?php
    include '../conn.php';

    $data = $_POST;

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user VALUES('', '$username', '$email', 1, '$password')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

