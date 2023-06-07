<?php
require("../algoritma/cbr.php");

if (isset($_POST['submit'])) {
    if (isset($_POST['gejala']) && is_array($_POST['gejala'])) {
        $result = CBR($_POST['gejala']);
        $penyakit = $_SESSION['list_penyakit'][$result - 1];

        if ($result == 1) {
            $saran = $_SESSION['list_saran_tingkat_1'];
        } else if ($result == 2) {
            $saran = $_SESSION['list_saran_tingkat_2'];
        } else if ($result == 3) {
            $saran = $_SESSION['list_saran_tingkat_3'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Blues Syndrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-title">
            Baby Blues Syndrome Check
        </div>
    </div>

    <section class="halakhir-section">
        <div class="container flex flex-wrap">
            <div class="img-cont">
                <img src="../img/babyblues1.png" alt="ting1">
            </div>
            <div class="text-cont">
                <div class="result-text-cont">
                    <h2>
                        Hasil Diagnosis
                    </h2>
                </div>
                <div class="solution-text-cont">
                    <h3><?php echo $penyakit ?></h3>
                    <p>Solusi</p>
                    <ol class>
                        <?php
                        foreach ($saran as $s) {
                            echo '<li><p>' . $s . '</p></li>';
                        }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
        <a href="../index.php" type="button" class="jumbotron-btn2">Home</a>
    </section>

</body>