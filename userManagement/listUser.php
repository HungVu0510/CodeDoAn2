<?php
    $sql = "SELECT * FROM user";
    $query = mysqli_query($con, $sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>List Users</h2>
        </div>
        <div class="card-body">
            <table class='table'>
                <thead class='thead-dark bg-info'>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Create Date</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['user']; ?></td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td><?php echo $row['dt']; ?></td>
                                <td>
                                    <a onClick="return Del('<?php echo $row['user']; ?>')"  href = 'userManagement.php?page_layout=delete&id=<?php echo $row['id']; ?>'>Delete</a>
                                </td>
                            </tr>
                            <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function Del(user) {
        return confirm('Are you sure to delete this user: ' + user +  '?');
    }
</script>