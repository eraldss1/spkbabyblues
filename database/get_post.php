<?php
require('db_connection.php');

function getPost()
{
    global $conn;
    $posts = [];

    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $post = new stdClass();
            $post->kode_pos = $row['kode_post'];
            $post->nama_post = $row['nama_post'];
            $post->det_post = $row['det_post'];

            $posts[] = $post;
        }
        return $posts;
    }
}
?>