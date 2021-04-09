<?php
    include '../conn.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $umur = $_POST['umur'];
    $ktp = $_POST['ktp'];
    $alamat = $_POST['alamat'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $password = $_POST['password'];

    $foto = $_POST['foto'];

    $sql = "UPDATE tourguide SET nama_tourguide='$nama', email_tourguide='$email', no_hp='$hp', no_ktp='$ktp', foto='$foto', alamat='$alamat', umur='$umur' WHERE id_tourguide='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: index.php");
    }else{
        echo mysqli_error($conn);
    }

?>