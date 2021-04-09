<?php
    include '../conn.php';

    // var_dump($_POST);
    // exit;

    $jenis_wisata = $_POST['jenis_wisata'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO ticket VALUES('', '$jenis_wisata', '$harga')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>