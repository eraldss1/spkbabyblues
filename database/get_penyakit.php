<?php
require('db_connection.php');

function getPenyakit()
{
    global $conn;
    $list_penyakit = [];

    $sql = "SELECT * FROM penyakit";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
            $list_penyakit[] = $row['nama_penyakit'];
        }
        return $list_penyakit;
    }
}
?>