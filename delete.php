<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><center>Chawanwit Webboard</center></h1><hr>
    <?php
    if(!isset($_SESSION['role'])&&(!$_SESSION['role'])=="a")
    {
        header('Location: index.php');
    }
    else
        echo "ลบกระทู้หมายเลข ".$_GET['id']
    ?>
</body>
</html>