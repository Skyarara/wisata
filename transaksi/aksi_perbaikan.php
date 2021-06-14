<?php
    include '../conn.php';
    
    $id = $_POST['id_pembayaran'];
    $bukti_lama = $_POST['bukti_lama']; 
    $file = $_FILES["bukti"]["name"];
    $target_dir = "img/";

    $filename = "img/".$bukti_lama;
    if(file_exists($filename)){
        unlink($filename);
    }else{
        echo "gagal harap coba lagi";
        exit;
    }

    $target_file = $target_dir . basename($_FILES["bukti"]["name"]);
    
    if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
        $sql = "UPDATE pembayaran SET bukti_pembayaran='$file', status=3 WHERE id_pembayaran ='$id' ";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: index.php");
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo 'Terjadi Kesalahan saat updoad file, silahkan coba lagi';
        exit;
    }

?>