<?php
    include '../conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin VALUES('', '$username', '$password')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>