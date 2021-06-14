<?php
    include '../conn.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    
    if($_POST['password'] != NULL){
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "UPDATE user SET username='$username', password='$password' WHERE id_user='$id'";
    }else{
        $sql = "UPDATE user SET username='$username' WHERE id_user='$id'";
    }

    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>