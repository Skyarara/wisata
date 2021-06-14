<?php
    include '../conn.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE user SET Nama='$username', email='$email', password='$password' WHERE id_user='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>