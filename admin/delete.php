<?php
    include '../conn.php';

    $id = $_GET['id_admin'];

    $sql = "DELETE FROM admin WHERE id_admin ='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>