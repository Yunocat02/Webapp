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
    <?php
        if(isset($_SESSION['role']))
        {
            header('Location: index.php');
            die;
        }
    ?>
    <h1><center>Chawanwit Webboard</center></h1><hr>
    <form action="verify.php" method="post">
    <table style="border:2px solid black; width:40%" align ="center">
        <tr><td style="background-color:#6CD2FE" colspan = "2">เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td><td><input type="text" name="user" size="50"></td></tr>
        <tr><td>password</td><td><input type="password" name="pass" size="50"></td></tr>
        <tr><td colspan = "2" align ="center"><input type="submit" value="Login"></tr></td>
    </table>
    </form>
    <center><p>ถ้ายังไม่ได้สมัครสมาชิก <a href = "register.php">กรุณาสมัครสมาชิก</a></p></center>
</body>
</html>