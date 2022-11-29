<?php
$id = $_GET['id'];
    $sql_up = "SELECT * FROM songs where id = $id";
    $query_up = mysqli_query($con, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {
        $songName = $_POST['songName'];
        if($_FILES['poster']['name']=='') {
            $poster = $row_up['songName'];
        } else {
            $poster = $row_up['songName'];
        }
        
        $poster_tmp = $_FILES['poster']['tmp_name'];
        $author = $_POST['author'];

        $sql = "INSERT INTO songs (songName, poster, author) VALUES ('$songName', 'img/$poster', '$author')";
        $query = mysqli_query($con, $sql);
        header('location: productManagement.php?page_layout=listSong');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Edit Song</h2>
        </div>
        <div class="card-body">
            <form method='POST' enctype='multipart/form-data'>
                <div class="form-group mb-4">
                    <label for=''>Song Name:</label>
                    <input type='text' name='songName' class='form-control' require>
                </div>

                <div class="form-group mb-4">
                    <label for=''>Author:</label>
                    <input type='text' name='author' class='form-control' require>
                </div>

                <div class="form-group mb-4">
                    <label for=''>Song Image:</label> <br>
                    <input type='file' name='poster'>
                </div>

                <button name='sbm' class='btn btn-success' type='submit'>Add</button>
            </form>
        </div>
    </div>
</div>