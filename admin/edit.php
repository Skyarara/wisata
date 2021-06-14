<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_user = $_GET['id_user'];
    $sql= "SELECT * FROM user WHERE id_user='$id_user'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>
    <?php if($data['is_admin'] == 1): ?>
        <p class="mb-4">Edit Admin </p>
        <?php else: ?>
            <p class="mb-4">Edit User </p>
        <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <?php if($data['is_admin'] == 1): ?>
            <h6 class="m-0 font-weight-bold text-primary">Role : Admin</h6>
        <?php else: ?>
            <h6 class="m-0 font-weight-bold text-primary">Role : User</h6>
        <?php endif; ?>
        </div>
        <div class="card-body">
            <form method="POST" action="action_edit.php">
                <input type="hidden" name="id" value="<?=$id_user?>">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?=$data['Nama']?>" name="username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?=$data['email']?>" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                    <small style="color:red;">Kosongkan jika tidak ingin diganti</small>
                </div>
                <button type="submit" class="btn btn-md btn-warning">Ubah</button>
        </div>
    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>