<?php
    include '../conn.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $umur = $_POST['umur'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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