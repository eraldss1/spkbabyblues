<?php
require_once('db_connection.php');

function getGejala()
{
    global $conn;
    $gejalas = [];

    $sql = "SELECT * FROM gejala";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $gejala = new stdClass();
            $gejala->kode_gejala = $row['kode_gejala'];
            $gejala->nama_gejala = $row['nama_gejala'];
            $gejala->CF_pkr = $row['CF_pkr'];

            $gejalas[] = $gejala;
        }
        return $gejalas;
    }
}
?>