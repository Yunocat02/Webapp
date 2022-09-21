<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Chawanwit Webboard</center></h1><hr>
    <center>
    <?php
        if(isset($_SESSION['role']))
        {
            header('Location: index.php');
            die;
        }
        if($_POST['user'] == "admin" && $_POST['pass'] == "ad1234"){
                echo "ยินดีต้องรับคุณ ADMIN";
                $_SESSION['username'] = "admin";
                $_SESSION['role'] = "a";
                $_SESSION['id'] = "session_id()";
                echo "<br><br> <a href='index.php'>กลับไปหน้าหลัก<br></a>";}
        elseif($_POST['user'] == "member" && $_POST['pass'] == "mem1234"){
                echo "ยินดีต้องรับคุณ MEMBER";
                $_SESSION['username'] = "member";
                $_SESSION['role'] = "m";
                $_SESSION['id'] = "session_id()";
                echo "<br><br> <a href='index.php'>กลับไปหน้าหลัก<br></a>";}
        else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            echo "<br><br>ถ้ายังไม่ได้สมัครสมาชิก <a href='register.html'>กรุณาสมัครสมาชิก<br></a>";}    
        
    ?>
    </center>
</body>
</html>

