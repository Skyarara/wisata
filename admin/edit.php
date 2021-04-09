<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_admin = $_GET['id_admin'];
    $sql= "SELECT * FROM admin WHERE id_admin='$id_admin'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>
    <p class="mb-4">Edit Admin </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="action_edit.php">
                <input type="hidden" name="id" value="<?=$id_admin?>">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?=$data['username']?>" name="username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="<?=$data['password']?>"
                        required>
                </div>
                <button type="submit" class="btn btn-md btn-warning">Ubah</button>
        </div>
    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>