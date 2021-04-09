<?php
    include '../conn.php';

    $id = $_GET['id_ticket'];

    $sql = "DELETE FROM ticket WHERE id_ticket ='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>