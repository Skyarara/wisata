<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

?>
<!-- audio -->
<audio id="audio_klenteng" src="audio/a.mp3"></audio>
<audio id="audio_brahma" src="audio/b.mp3"></audio>
<audio id="audio_pagoda" src="audio/pagoda.m4a"></audio>
<!-- <audio id="audio_atlantis" src="audio/pagoda.m4a"></audio> -->
<input type="text" value="0" id="playing">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Spots</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-6">
                <div class="card-header py-6">
                    <h6 class="m-0 font-weight-bold text-primary">Klenteng Sanggar Agung</h6>
                </div>
                <div class="card-body">
                    <img src="../img/kenjeran/klenteng sanggaragung resized.jpg" width="100%" height="400px"
                        style="border:0;">
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-opt="1" class="btn btn-success trigger">
                        Street View
                    </button>
                    <a class="btn btn-warning" href="virtual_tour.php">
                        Virtual Tour
                    </a>
                    </button>
                    <button type="button" data-opt="2" class="btn btn-info trigger">
                        Camera 360
                    </button>
                    <button type="button" class="btn btn-primary audio" data-opt="1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-volume-up" viewBox="0 0 16 16">
                            <path
                                d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z">
                            </path>
                            <path
                                d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z">
                            </path>
                            <path
                                d="M10.025 8a4.486 4.486 0 0 1-1.318 3.182L8 10.475A3.489 3.489 0 0 0 9.025 8c0-.966-.392-1.841-1.025-2.475l.707-.707A4.486 4.486 0 0 1 10.025 8zM7 4a.5.5 0 0 0-.812-.39L3.825 5.5H1.5A.5.5 0 0 0 1 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 7 12V4zM4.312 6.39 6 5.04v5.92L4.312 9.61A.5.5 0 0 0 4 9.5H2v-3h2a.5.5 0 0 0 .312-.11z">
                            </path>
                        </svg>
                        Apa ini ?
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-6">
                <div class="card-header py-6">
                    <h6 class="m-0 font-weight-bold text-primary">Patung Brahma 4 Muka</h6>
                </div>
                <div class="card-body">
                    <img src="../img/kenjeran/Patung brahma resized.jpg" width="100%" height="400px" style="border:0;">
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-opt="3" class="btn btn-success trigger">
                        Street View
                    </button>
                    <button type="button" data-opt="4" class="btn btn-info trigger">
                        Camera 360
                    </button>
                    <button type="button" class="btn btn-primary audio" data-opt="2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-volume-up" viewBox="0 0 16 16">
                            <path
                                d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z">
                            </path>
                            <path
                                d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z">
                            </path>
                            <path
                                d="M10.025 8a4.486 4.486 0 0 1-1.318 3.182L8 10.475A3.489 3.489 0 0 0 9.025 8c0-.966-.392-1.841-1.025-2.475l.707-.707A4.486 4.486 0 0 1 10.025 8zM7 4a.5.5 0 0 0-.812-.39L3.825 5.5H1.5A.5.5 0 0 0 1 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 7 12V4zM4.312 6.39 6 5.04v5.92L4.312 9.61A.5.5 0 0 0 4 9.5H2v-3h2a.5.5 0 0 0 .312-.11z">
                            </path>
                        </svg>
                        Apa ini ?
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-6">
                <div class="card-header py-6">
                    <h6 class="m-0 font-weight-bold text-primary">Pagoda Tian Ti</h6>
                </div>
                <div class="card-body">
                    <img src="../img/kenjeran/pagoda-Tian-Ti resized.jpg" width="100%" height="400px" style="border:0;">
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-opt="5" class="btn btn-success trigger">
                        Street View
                    </button>
                    <button type="button" data-opt="6" class="btn btn-info trigger">
                        Camera 360
                    </button>
                    <button type="button" class="btn btn-primary audio" data-opt="3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-volume-up" viewBox="0 0 16 16">
                            <path
                                d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z">
                            </path>
                            <path
                                d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z">
                            </path>
                            <path
                                d="M10.025 8a4.486 4.486 0 0 1-1.318 3.182L8 10.475A3.489 3.489 0 0 0 9.025 8c0-.966-.392-1.841-1.025-2.475l.707-.707A4.486 4.486 0 0 1 10.025 8zM7 4a.5.5 0 0 0-.812-.39L3.825 5.5H1.5A.5.5 0 0 0 1 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 7 12V4zM4.312 6.39 6 5.04v5.92L4.312 9.61A.5.5 0 0 0 4 9.5H2v-3h2a.5.5 0 0 0 .312-.11z">
                            </path>
                        </svg>
                        Apa ini ?
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-6">
                <div class="card-header py-6">
                    <h6 class="m-0 font-weight-bold text-primary">Atlantis Land</h6>
                </div>
                <div class="card-body">
                    <img src="../img/kenjeran/atlantisland resized cropped.jpg" width="100%" height="400px"
                        style="border:0;">
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-opt="7" class="btn btn-success trigger">
                        Street View
                    </button>
                    <button type="button" data-opt="8" class="btn btn-info trigger">
                        Camera 360
                    </button>
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-volume-up" viewBox="0 0 16 16">
                            <path
                                d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z">
                            </path>
                            <path
                                d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z">
                            </path>
                            <path
                                d="M10.025 8a4.486 4.486 0 0 1-1.318 3.182L8 10.475A3.489 3.489 0 0 0 9.025 8c0-.966-.392-1.841-1.025-2.475l.707-.707A4.486 4.486 0 0 1 10.025 8zM7 4a.5.5 0 0 0-.812-.39L3.825 5.5H1.5A.5.5 0 0 0 1 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 7 12V4zM4.312 6.39 6 5.04v5.92L4.312 9.61A.5.5 0 0 0 4 9.5H2v-3h2a.5.5 0 0 0 .312-.11z">
                            </path>
                        </svg>
                        Apa ini ?
                    </button>
                </div>
            </div>
        </div>
    </div>
</div><br>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="frame" src="" width="100%" height="400px" style="border:0;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br><br>

<?php 
    include "../layout/user/footer.php";
?>
<script src="spot.js"></script>