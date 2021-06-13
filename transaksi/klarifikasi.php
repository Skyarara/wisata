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
        // $to = "caopipiopi@gmail.com";

        $subject = 'Tiket Kenpark';

        $message = "
        <html>

        <body>
            <p>Pemesanan tiket sudah dikonfirmasi</p>
            <a>Ini kode unikmu: <b>$id</b></a><br>
            <small>Note: Untuk invoice dan barcode dapat dilihat di halaman transaksi</small>
        </body>

        </html>
        ";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        mail($to, $subject, $message, implode("\r\n", $headers));

        $sql = "UPDATE pembayaran SET status=1, tanggal_klarifikasi='$date' WHERE id_pembayaran='$id'";
    }
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index_admin.php");
    }else{
        echo mysqli_error($conn);
    }

?>