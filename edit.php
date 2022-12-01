<?php
$id = $_GET['id'];
    $sql_up = "SELECT * FROM songs where id = $id";
    $query_up = mysqli_query($con, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {
        $songName = $_POST['songName'];
        if($_FILES['poster']['name']=='') {
            $poster = $row_up['poster'];
        } else {
            $poster = $_FILES['poster']['name'];
        }
        
        $poster_tmp = $_FILES['poster']['tmp_name'];
        $author = $_POST['author'];

        $sql = "UPDATE songs SET songName='$songName', poster='img/$poster', author='$author' WHERE id=$id" ;
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
                    <input type='text' name='songName' class='form-control' require value="<?php echo $row_up['songName']; ?>">
                </div>

                <div class="form-group mb-4">
                    <label for=''>Author:</label>
                    <input type='text' name='author' class='form-control' require value="<?php echo $row_up['author']; ?>">
                </div>

                <div class="form-group mb-4">
                    <label for=''>Song Image:</label> <br>
                    <input type='file' name='poster'>
                </div>

                <button name='sbm' class='btn btn-success' type='submit'>Edit</button>
            </form>
        </div>
    </div>
</div>