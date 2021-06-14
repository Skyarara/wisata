<?php
    include '../conn.php';

    $id = $_GET['id_pembayaran'];
    $sql = "SELECT * FROM pembayaran WHERE pembayaran.id_pembayaran = '$id'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id'";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        $filename = "img/".$data['bukti_pembayaran'];
        if(file_exists($filename)){
            unlink($filename);
        }else{
            echo "gagal harap coba lagi";
            exit;
        }
        header("Location: index_admin.php");
    }else{
        echo mysqli_error($conn);
    }

?>