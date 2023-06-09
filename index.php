<?php
session_start();

require('./database/get_post.php');
require('./database/get_saran.php');
require('./database/get_gejala.php');
require('./database/get_penyakit.php');

$_SESSION['list_penyakit'] = getPenyakit();
$_SESSION['list_gejala'] = getGejala();
$_SESSION["list_post"] =  getPost();
$_SESSION["list_saran_tingkat_1"] =  getSaran(1);
$_SESSION["list_saran_tingkat_2"] =  getSaran(2);
$_SESSION["list_saran_tingkat_3"] =  getSaran(3);
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
  <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="navbar">
    <div class="navbar-title">
      Baby Blues Syndrome Check
    </div>
  </div>

  <div class="wrapper">
    <div class="jumbotron">
      <div class="jumbotron-left">
        <h1>Baby Blues Syndrome</h1>
        <p>Kondisi gangguan emosional atau mood yang umum dialami oleh ibu setelah melahirkan. Kondisi ini menyebabkan
          ibu lebih emosional dan sensitif, seperti mudah sedih, cemas, lelah, lekas marah, sering menangis, sulit
          tidur, dan lainnya.</p>
        <a href="page/info_page.php" type="button" class="jumbotron-btn">Info</a>
        <a href="page/check_page.php" type="button" class="jumbotron-btn">Check Now</a>
      </div>

      <div class="jumbotron-right">
        <img src="img/mom.png" />
      </div>
    </div>
  </div>
</body>

</html>