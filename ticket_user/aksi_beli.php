<?php
    include '../conn.php';

    $harga = $_POST['harga'];
    $date = date("Y-m-d");
    $jatuh_tempo = date("Y-m-d", strtotime("+1 week"));
    $file = $_FILES["bukti"]["name"];
    $id_user = $_SESSION['id_user'];
    $id_ticket = $_POST['id_ticket'];
    $target_dir = "../transaksi/img/";
    $target_file = $target_dir . basename($_FILES["bukti"]["name"]);

    if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
        $uniqueid = uniqid();
        $sql = "INSERT INTO pembayaran VALUES('$uniqueid', 0, $date,'$jatuh_tempo', NULL, '$harga', '$file', NULL, '$id_user' ,'$id_ticket')";
        $query = mysqli_query($conn, $sql);
    
        if($query){
            header("Location: ../transaksi/index.php");
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo 'Terjadi Kesalahan saat updoad file, silahkan coba lagi';
        exit;
    }

?>