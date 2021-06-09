$('.trigger').on('click', function () {
    var opt = $(this).data('opt');
    switch (opt) {
        case 1:
            var
                src =
                    "https://www.google.com/maps/embed?pb=!4v1621882190368!6m8!1m7!1sAElPdRWzYNR96hMooqE1qw!2m2!1d-7.248555416791929!2d112.8022513157001!3f350.4809!4f0!5f0.7820865974627469";
            var title = "Street View Klenteng Sanggar Agung";
            break;
        case 2:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1617530101770!6m8!1m7!1sCAoSLEFGMVFpcE1ha2pDQ0lOMXdPc2pNRF9QaUcydjJqWVBnT19kbnA4empmTWxB!2m2!1d-7.247154199999999!2d112.8025535!3f269.67448007737346!4f-1.8420999644238236!5f0.4000000000000002"
            var title = "Camera 360 Klenteng Sanggar Agung";
            break;
        case 3:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1621882491956!6m8!1m7!1s037fb23iHDkndhUM1n8Q4Q!2m2!1d-7.246826669141439!2d112.8011770220298!3f190.27298!4f0!5f0.7820865974627469";
            var title = "Street View Patung Brahma";
            break;
        case 4:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1617529740461!6m8!1m7!1sCAoSLEFGMVFpcE1Kc2MxaHJlVXpxeERnNUVXd0NMbUpTdUlQQm5wQjFOWkJRZ3pB!2m2!1d-7.234584225213776!2d112.7380507110095!3f349.5917912610072!4f-3.760105986796205!5f0.7820865974627469"
            var title = "Camera 360 Patung Brahma";
            break;
        case 5:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1621882603229!6m8!1m7!1s9cKgDm9AMOeHpBubdJPsoA!2m2!1d-7.254165761592636!2d112.8052025548826!3f5.217394177003184!4f3.521589638456902!5f0.7820865974627469"
            var title = "Street View Pagoda Tian Ti";
            break;
        case 6:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1617679427366!6m8!1m7!1sCAoSLEFGMVFpcE43TjhmVEZxN3Q4UTdxSjRVVUlaVjdnd0NmVEg1eTdyYUV0bWJS!2m2!1d-7.252997828904998!2d112.8055772811914!3f193.43792473088658!4f4.694726967575804!5f0.7820865974627469";
            var title = "Camera 360 Pagoda Tian Ti";
            break;
        case 7:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1621882660108!6m8!1m7!1s8nc2nwespuRVLwbtnoKCdw!2m2!1d-7.253329690095828!2d112.8029222769374!3f305.43738!4f0!5f0.7820865974627469"
            var title = "Street View Atlantis Land";
            break;
        case 8:
            var src =
                "https://www.google.com/maps/embed?pb=!4v1617529960140!6m8!1m7!1sCAoSLEFGMVFpcE8xTmF1d3FOcHdXZC0yMkNheUdRVnFKMkxMUHdHUHZNR0xsOXp5!2m2!1d-7.254288!2d112.8018528!3f301.6142454004159!4f0.9217158648408343!5f0.7820865974627469"
            var title = "Camera 360 Atlantis Land";
            break;
        default:
            console.log("error");
            alert("Terjadi Kesalahan Harap Coba Lagi");
            break;
    }
    $('#modal').modal('show').on('shown.bs.modal', function () {
        $("#frame").attr("src", src);
        $("#title").text(title);
    });
});

$("#modal").on('hide.bs.modal', function () {
    $("#frame").attr("src", "");
    $("#title").text("");
});

$(".audio").on("click", function () {

    b = parseInt($("#playing").val());

    if (b != 0) {
        switch (b) {
            case 1:
                console.log("MASUK");
                var audio = document.getElementById("audio_klenteng");
                audio.pause();
                audio.currentTime = 0;
                break;
            case 2:
                var audio = document.getElementById("audio_brahma");
                audio.pause();
                audio.currentTime = 0;
                break;
            case 3:
                var audio = document.getElementById("audio_pagoda");
                audio.pause();
                audio.currentTime = 0;
                break;
            case 4:
                var audio = document.getElementById("audio_atlantis");
                audio.pause();
                audio.currentTime = 0;
                break;
        }
    }

    var a = $(this).data("opt");
    $("#playing").val(a)

    switch (a) {
        case 1:
            var audio = document.getElementById("audio_klenteng");
            audio.play();
            break;
        case 2:
            var audio = document.getElementById("audio_brahma");
            audio.play();
            break;
        case 3:
            var audio = document.getElementById("audio_pagoda");
            audio.play();
            break;
        case 4:
            var audio = document.getElementById("audio_atlantis");
            audio.play();
            break;
    }

});