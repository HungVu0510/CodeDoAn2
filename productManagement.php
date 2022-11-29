<?php
    require_once 'db_connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <title>Product Management</title>
</head>
<body>
    <?php
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'listSong':
                    require_once 'productManagement/listSong.php';
                    break;

                case 'add':
                    require_once 'productManagement/add.php';
                    break;

                case 'edit':
                    require_once 'productManagement/edit.php';
                    break;

                case 'delete':
                    require_once 'productManagement/delete.php';
                    break;

                default: 
                    require_once 'productManagement/listSong.php';
                    break;
            } 
            
        } else {
            require_once 'productManagement/listSong.php';
        }
    ?>
</body>
</html>