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

    <iframe
        src="
        https://www.google.com/maps/embed?pb=!4v1617530101770!6m8!1m7!1sCAoSLEFGMVFpcE1ha2pDQ0lOMXdPc2pNRF9QaUcydjJqWVBnT19kbnA4empmTWxB!2m2!1d-7.247154199999999!2d112.8025535!3f269.67448007737346!4f-1.8420999644238236!5f0.4000000000000002"
        width="100%" height="500" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>

</div>

<?php 
    include "../layout/user/footer.php";
?>