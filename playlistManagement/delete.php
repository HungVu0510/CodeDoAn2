<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM playlist where id = $id";
    $query = mysqli_query($con, $sql);
    header('location: playlistManagement.php?page_layout=listSong');
?>