<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM user where id = $id";
    $query = mysqli_query($con, $sql);
    header('location: userManagement.php?page_layout=listUser');
?>