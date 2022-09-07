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
        if($_POST['user'] == "admin" && $_POST['pass'] == "ad1234")
                echo "ยินดีต้องร้บคุณ ADMIN";
        elseif($_POST['user'] == "member" && $_POST['pass'] == "mem1234")
                echo "ยินดีต้องร้บคุณ MEMBER";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง<br><br>";

        echo "ถ้ายังไม่ได้สมัครสมาชิก <a href='index.php'>กรุณาสมัครสมาชิก<br></a>";
        
    ?>
    </center>
</body>
</html>

