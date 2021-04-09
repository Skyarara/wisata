<?php
    include '../conn.php';

    // var_dump($_POST);
    // exit;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin VALUES('', '$username', '$password')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>