<?php
require('../database/get_post.php');
require('../database/get_saran.php');

$posts = getPost();
$saran_tingkat_1 = getSaran(1);
$saran_tingkat_2 = getSaran(2);
$saran_tingkat_3 = getSaran(3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Blues Syndrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header>
        <div class="navbar">
            <div class="navbar-title">
                Baby Blues Syndrome Check
            </div>
        </div>
    </header>
    <main>
        <section class="section-card">
            <div class="card-cont">
                <div class="card card-1">
                    <div class="card-img">
                        <img src="../img/babyblues1.png" alt="ting1">
                    </div>
                    <div class="card__details">
                        <ul>
                            <h5>
                                <?php
                                echo get_object_vars($posts[0])["nama_post"];
                                ?>
                            </h5>
                            <p>
                                <?php
                                echo get_object_vars($posts[0])["det_post"];
                                ?>
                            </p>
                        </ul>
                    </div>
                    <br />
                    <div class="btn_wrapper">
                        <button type="button" class="btn saran" data-bs-toggle="modal" data-bs-target="#saranTingkat1">
                            Saran
                        </button>
                    </div>
                </div>

                <div class="card card-2">
                    <div class="card-img2">
                        <img src="../img/babyblues2.png" alt="ting2">
                    </div>
                    <div class="card__details">
                        <ul>
                            <h5>
                                <?php
                                echo get_object_vars($posts[1])["nama_post"];
                                ?>
                            </h5>
                            <p>
                                <?php
                                echo get_object_vars($posts[1])["det_post"];
                                ?>
                            </p>
                        </ul>
                    </div>
                    <br />
                    <div class="btn_wrapper">
                        <button type="button" class="btn saran" data-bs-toggle="modal" data-bs-target="#saranTingkat2">
                            Saran
                        </button>
                    </div>
                </div>

                <div class="card card-3">
                    <div class="card-img3">
                        <img src="../img/babyblues3.png" alt="ting3">
                    </div>
                    <div class="card__details">
                        <ul>
                            <h5>
                                <?php
                                echo get_object_vars($posts[2])["nama_post"];
                                ?>
                            </h5>
                            <p>
                                <?php
                                echo get_object_vars($posts[2])["det_post"];
                                ?>
                            </p>
                        </ul>
                    </div>
                    <br />
                    <div class="btn_wrapper">
                        <button type="button" class="btn saran" data-bs-toggle="modal" data-bs-target="#saranTingkat3">
                            Saran
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn_wrapper">
            <a href="check_page.php" type="button" class="jumbotron-btn2set">Check Now</a>
        </div>

        <div class="modal fade" id="saranTingkat1" tabindex="-1" aria-labelledby="saranTingkat1Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="saranTingkat1Label">Baby Blues Syndrome</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Tingkat 1</h6>
                        <ol class>
                            <?php
                            foreach ($saran_tingkat_1 as $saran) {
                                echo '<li>' . $saran . '</li>';
                            }
                            ?>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn popup__btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="saranTingkat2" tabindex="-1" aria-labelledby="saranTingkat2Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="saranTingkat2Label">Baby Blues Syndrome</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Tingkat 2</h6>
                        <ol class>
                            <?php
                            foreach ($saran_tingkat_2 as $saran) {
                                echo '<li>' . $saran . '</li>';
                            }
                            ?>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn popup__btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="saranTingkat3" tabindex="-1" aria-labelledby="saranTingkat3Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="saranTingkat3Label">Baby Blues Syndrome</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Tingkat 3</h6>
                        <ol class>
                            <?php
                            foreach ($saran_tingkat_3 as $saran) {
                                echo '<li>' . $saran . '</li>';
                            }
                            ?>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn popup__btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>