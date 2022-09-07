<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Chawanwit Webboard</h1><hr>
    <center>
        กระทู้หมายเลข <?php echo $_GET["id"] ?><br><br>
        <table style="border:2px solid black; width:40%" align ="center">
        <tr><td style="background-color:#6CD2FE" colspan = "2" align="center">แสดงความคิดเห็น</td></tr>
        <tr><td align ="center"><textarea id="test" name="test" rows="10" cols="80%"></textarea></td></tr>
        <tr><td colspan = "2" align ="center"><input type="submit" value="ส่งข้อความ"></tr></td><br>
        </table>
        <p><a href = "index.html">กลับไปหน้าหลัก</a></p>
    </center>
</body>
</html>