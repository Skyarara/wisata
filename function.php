<?php

function registrasi($data)  {
    global $conn;

    $Username = strtolower(stripslashes($data["Username"]));
    $Email = "Email";
    $Password = mysqli_real_escape_string($conn, $data["Password"]);
    $Password2 = mysqli_real_escape_string($conn, $data["Password2"]);

    if ( $Password !== $Password2)
    {
        echo "<script>
            alert('konfirmasi salah'); 
        </script>";
        return false;
    }
    else 
    {
        echo_mysqli_error($conn);
    }
}