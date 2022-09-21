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
    if(!isset($_SESSION['role']))
    {
        header('Location: index.php');
        die;
    }
?>
    <table>
    <tr><td colspan="2">
    <?php
        echo "ผู้ใช้: $_SESSION[username]<br>";
    ?></td>
    </tr>
    <tr>
    <td> หมวดหมู่: </td>
    <td> <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select></td>
        </tr>

    <tr><td>หัวข้อ:</td>   <td><input type="text" name="user" size="25"></input></td></tr> 
    <tr><td>เนื้อหา: </td> <td><textarea name="data" id="" cols="25" rows="6"></textarea></td></tr>

    <tr><td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
</body>
</html>