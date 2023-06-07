<?php
session_start();
$gejalas = $_SESSION['list_gejala']; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Blues Syndrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/check.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="navbar">
        <div class="navbar-title">
            Baby Blues Syndrome Check
        </div>
    </div>

    <div class="check_wrapper">
        <h2>Pertanyaan Tentang Gejala</h2>
        <hr>
        <form method="post" action="./result_page.php">
            <?php
            foreach ($gejalas as $g) {
                echo '<label><input type="checkbox" name="gejala[]" value="' . get_object_vars($g)['kode_gejala'] . '">' . get_object_vars($g)['nama_gejala'] . '</label><br>';
            }

            ?>
            <button type="submit" name="submit" value="Submit">
                Submit
            </button>

            <br>
            <br>
        </form>
    </div>

</body>