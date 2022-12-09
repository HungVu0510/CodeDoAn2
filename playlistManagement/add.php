<?php
    $sql = "SELECT * FROM playlist";
    $query = mysqli_query($con, $sql);

    if (isset($_POST['sbm'])) {
        $songName = $_POST['songName'];
        $poster = $_FILES['poster']['name'];
        $poster_tmp = $_FILES['poster']['tmp_name'];
        $author = $_POST['author'];

        $sql = "INSERT INTO playlist (songName, poster, author) VALUES ('$songName', 'img/$poster', '$author')";
        $query = mysqli_query($con, $sql);
        move_uploaded_file($poster_tmp, 'img/'.$poster);
        header('location: playlistManagement.php?page_layout=listSong');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Add New Song To PlayList</h2>
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