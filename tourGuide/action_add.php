<?php
    include '../conn.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $umur = $_POST['umur'];
    $ktp = $_POST['ktp'];
    $alamat = $_POST['alamat'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];

    $foto = $_POST['foto'];

    $sql = "INSERT INTO tourguide VALUES('', '$nama', '$email', '$hp', '$ktp', '$password', '$foto', '$alamat', '$umur')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>