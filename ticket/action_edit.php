<?php
    include '../conn.php';

    $id = $_POST['id'];
    $jenis_wisata = $_POST['jenis_wisata'];
    $harga = $_POST['harga'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $password = $_POST['password'];


    $sql = "UPDATE ticket SET jenis_wisata='$jenis_wisata', harga='$harga' WHERE id_ticket='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>