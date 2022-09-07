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
        </select><a href="login.html" style="float:right;">เข้าสู่ระบบ</a>
        <br><br>
        <?php
        $i = 1;
        while($i <= 10){
            echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i <br></a></li>";
            $i++;
        }
        ?>
</body>
</html>
