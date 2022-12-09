<?php
    $sql = "SELECT * FROM playlist";
    $query = mysqli_query($con, $sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>List Songs</h2>
        </div>
        <div class="card-body">
            <table class='table'>
                <thead class='thead-dark bg-info'>
                    <tr>
                        <th>#</th>
                        <th>Song Name</th>
                        <th>Poster</th>
                        <th>Author</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['songName']; ?></td>
                                <td>
                                    <img style='width: 100px' src='<?php echo $row['poster']; ?>'>
                                </td>
                                <td><?php echo $row['author']; ?></td>
                                <td>
                                    <a onClick="return Del('<?php echo $row['songName']; ?>')"  href = 'playlistManagement.php?page_layout=delete&id=<?php echo $row['id']; ?>'>Delete</a>
                                </td>
                            </tr>
                            <?php }
                    ?>
                </tbody>
            </table>
            <div>
                <a class="btn btn-primary" href = 'playlistManagement.php?page_layout=add'>Add New Song To PlayList</a>
            </div>
        </div>
    </div>
</div>
<script>
    function Del(songName) {
        return confirm('Are you sure to delete this song In your playlist: ' + songName +  '?');
    }
</script>