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

    <?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        if($address == NULL){
            $address = "kenjeran park";
        }
            $address = str_replace(" ", "+", $address);
        ?>

    <iframe width="100%" height="500"
        src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

    <?php
    }else{?>
    <!-- <iframe width="100%" height="500" src="https://maps.google.com/maps?q=kenjeran+park&output=embed"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!4v1617529740461!6m8!1m7!1sCAoSLEFGMVFpcE1Kc2MxaHJlVXpxeERnNUVXd0NMbUpTdUlQQm5wQjFOWkJRZ3pB!2m2!1d-7.234584225213776!2d112.7380507110095!3f349.5917912610072!4f-3.760105986796205!5f0.7820865974627469" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <!-- -7.2497746094828655, 112.8009663760304 -->
    <?php }?>

    <!-- <form method="POST">
        <p>
            <input type="text" name="latitude" placeholder="Enter latitude">
        </p>

        <p>
            <input type="text" name="longitude" placeholder="Enter longitude">
        </p>

        <input type="submit" name="submit_coordinates">
    </form> -->

    <?php
    // if (isset($_POST["submit_coordinates"]))
    // {
        // $latitude = $_POST["latitude"];
        // $longitude = $_POST["longitude"];
        // ?>

    <!-- <iframe width="100%" height="500"
        src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe> -->


</div>

<?php 
    // }
    include "../layout/user/footer.php";
?>