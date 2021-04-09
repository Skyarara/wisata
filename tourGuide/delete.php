<?php
    include '../conn.php';

    exit;

    $id = $_GET['id_tourguide'];

    $sql = "DELETE FROM tourguide WHERE id_tourguide ='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>