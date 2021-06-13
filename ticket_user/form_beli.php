<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_ticket = $_GET['id_ticket'];
    $sql= "SELECT * FROM ticket WHERE id_ticket='$id_ticket'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tiket</h1>
    <p class="mb-4">Beli Tiket</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tiket</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="aksi_beli.php" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id_ticket" value="<?=$data['id_ticket']?>" readonly>
                <a style="color:red;">kode tiket akan dikirimkan melalui email</a>
                <div class="mb-3">
                    <label class="form-check-label">Jenis Wisata</label>
                    <input type="text" class="form-control" name="jenis_wisata" value="<?=$data['jenis_wisata']?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Harga Tiket</label>
                    <input type="text" class="form-control" id="nominal_harga" value="<?=$data['harga']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Jumlah Tiket</label>
                    <input type="number" class="form-control" name="jumlah" value="1" id="jumlah" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Total Harga</label>
                    <input type="hidden" id="harga" name="harga" value="<?=$data['harga']?>">
                    <input type="text" class="form-control" id="fake_harga"
                        value="Rp. <?=number_format($data['harga'])?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Masukan Bukti Pembayaran</label>
                    <a style="color:red;">Rek: 6281947281182 | a.n Kenpark Money</a>
                    <input type="file" class="form-control" name="bukti" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-md btn-info">Beli</button>
        </div>

    </div>
</div>

<?php 
    include "../layout/user/footer.php";
    ?>
<script>
    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
    $("#jumlah").on("keyup", function () {
        var jumlah = $(this).val();
        var harga = $("#nominal_harga").val();
        var total = jumlah * harga;
        var coma_total = addCommas(total);
        $("#harga").val(total);
        $("#fake_harga").val("Rp. " + coma_total);
        console.log(total);
        console.log(coma_total);
    });
</script>