<?php
include '../conn.php';

if( isset($_SESSION["login"])) {
    header("Location: ../main/index.php");
    exit;
}

if( isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if( mysqli_num_rows($result) === 1) {
        
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['password'])) {
            $_SESSION["login"] = true;
            $_SESSION["role"] = $row['is_admin'];
            $_SESSION["nama"] = $row['Nama'];
            $_SESSION["id_user"] = $row['id_user'];
            header("Location: ../main/index.php");
            exit;
        }else{
            echo '<script type="text/javascript">
                alert("Password Salah");
            </script>';
        }
    } else {
            echo '<script type="text/javascript">
                alert("Username Tidak Ditemukan");
            </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lumine - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Traveler!</h1>
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <!-- action="../main/index.php" -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password" required>
                                        </div>

                                        <button type="submit" name="login"
                                            class="btn btn-primary btn-user btn-block">Masuk</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register2.php">Buat Akun!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../landing/index.php">Kembali?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>