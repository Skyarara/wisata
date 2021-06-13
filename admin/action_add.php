<?php
    include '../conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user VALUES(NULL, '$username', '$password')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>