<?php
    include '../conn.php';

    $id = $_POST['id_pembayaran'];
    $alasan = $_POST['alasan'];
    $date = date("Y-m-d");

    $sql = "UPDATE pembayaran SET status=2, reason='$alasan', tanggal_klarifikasi='$date'  WHERE id_pembayaran ='$id'";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM pembayaran JOIN user  ON pembayaran.id_user = user.id_user WHERE
    pembayaran.id_pembayaran = '$id'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    if($query){
        // $to = $data['email'];
        $to = "caopipiopi@gmail.com";

        $subject = 'Tiket Kenpark';

        $message = "
        <html>

        <body>
            <p>Pemesanan tiket ditolak</p>
            <a>alasan penolakan: <b>$alasan</b></a><br>
            <small>Note: Untuk perbaikan dapat dilakukan di halaman transaksi, jika ada kekurangan biaya tolong untuk menyertakan foto awal juga</small>
        </body>

        </html>
        ";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        mail($to, $subject, $message, implode("\r\n", $headers));
        header("Location: index_admin.php");
    }else{
        echo mysqli_error($conn);
    }

?>