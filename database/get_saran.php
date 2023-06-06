<?php
require('db_connection.php');

function getSaran($kode_penyakit)
{
    global $conn;
    $sarans = [];

    $sql = "SELECT * FROM saran WHERE kode_penyakit = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $kode_penyakit);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sarans[] = $row['saran'];
        }
    }
    $stmt->close();
    return $sarans;
}
?>