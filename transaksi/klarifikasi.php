<?php
    include '../conn.php';

    $id = $_GET['id_pembayaran'];
    $status = $_GET['status'] == 1 ? 0 : 1;
    $date = date("Y-m-d");

    if($status == 0){
        $sql = "UPDATE pembayaran SET status=0, tanggal_klarifikasi=NULL WHERE id_pembayaran='$id'";
    }else{
        $sql= "SELECT * FROM pembayaran JOIN user ON pembayaran.id_user = user.id_user WHERE pembayaran.id_pembayaran='$id'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);
        
        $to = $data['email'];

        $subject = 'Tiket Kenpark';
        $message = 'Pesanan Tiketmu Telah diverifikasi berikut code unikmu: lasdjlasdjsal';

        mail($to, $subject, $message);

        $sql = "UPDATE pembayaran SET status=1, tanggal_klarifikasi='$date' WHERE id_pembayaran='$id'";
    }
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index_admin.php");
    }else{
        echo mysqli_error($conn);
    }

?>