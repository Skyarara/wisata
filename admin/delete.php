<?php
    include '../conn.php';

    $id = $_GET['id_user'];

    $sql = "DELETE FROM user WHERE id_user ='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>