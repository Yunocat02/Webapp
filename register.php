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
    <h1><center>สมัครสมาชิก</center></h1><hr>
    <table style="border:2px solid black; width:40%" align ="center">
    <form>
        <tr><td style="background-color:#6CD2FE" colspan = "2">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="username" size="50"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password" name="passregis" size="50"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="fnamelname" size="50"></td></tr>
        <tr><td>เพศ: </td><td>
            <input type="radio" name="gender" value="m">ชาย<br>
            <input type="radio" name="gender" value="f">หญิง<br>
            <input type="radio" name="gender" value="o">อื่นๆ<br>
        <tr><td>อีเมล:</td><td><input type="text" name="email" size="50"></td></tr>
        <tr><td colspan = "2" align ="center"><input type="submit" value="สมัครสมาชิก"></tr></td>
    </form>
    </table>
    <center><p><a href = "index.php">กลับไปยังหน้าหลัก</a></p></center>
</body>
</html>