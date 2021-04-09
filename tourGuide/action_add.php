<?php
    include '../conn.php';

    // var_dump($_POST);
    // exit;

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $umur = $_POST['umur'];
    $password = $_POST['password'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO tourguide VALUES('', '$nama', '$email', '$hp', '$password', '$foto', '$umur')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo 'Terjadi Kesalahan';
    }

?>