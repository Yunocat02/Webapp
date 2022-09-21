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
    หมวดหมู่ :
        <select name="list">
            <option value="all">--ทั้งหมด--</option>
            <option value="common">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
            </select>
            <?php
            if(isset($_SESSION['username'])) {
                echo "ผู้ใช้งานระะบบ : ".$_SESSION['username'];
                echo "<a href='logout.php' style='float:right;'>ออกจากระบบ</a>";
            }
            else{
                echo "<a href='login.php' style='float:right;'>เข้าสู่ระบบ</a>";
            }
            ?>
        <br>
        <a href='newpost.php'>สร้างกระทู้ใหม่</a><br><br>
        <?php
        $i = 1;
        if(isset($_SESSION['role'])&&($_SESSION['role'])=="a") {
        while($i <= 10){
            echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a> <a href='delete.php?id=$i'>ลบ</a><br></li>";
            $i++;}
        }
        else{
            while($i <= 10){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i </a><br></li>";
                $i++;}
        }
        ?>
</body>
</html>
