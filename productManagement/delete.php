<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM songs where id = $id";
    $query = mysqli_query($con, $sql);
    header('location: productManagement.php?page_layout=listSong');
?>