<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peta</h1>
    </div>

    <form method="POST">
        <p>
            <div class="input-group">
                <input type="text" class="form-control border-0 small" placeholder="Cari..." name="address">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="submit_address">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </p>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!4v1617529960140!6m8!1m7!1sCAoSLEFGMVFpcE8xTmF1d3FOcHdXZC0yMkNheUdRVnFKMkxMUHdHUHZNR0xsOXp5!2m2!1d-7.254288!2d112.8018528!3f301.6142454004159!4f0.9217158648408343!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>

<?php 
    include "../layout/user/footer.php";
?>