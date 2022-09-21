<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
    <hr>
    <form action="verify.php" method="post">
    <table style="border: 2px solid black; width : 40%" align="center">
        <tr><td style="background-color:#6CD2FE" colspan="2">เข้าสู่ระบบ</td></tr>
         <tr><td>Login:</td><td><input type="text" name ="Login" size="50"></td></tr><br>
         <tr><td>password:</td><td><input type="password" name ="Pwd" size="50"></td></tr><br> 
         <tr><td colspan="2" align="center"><input type="submit" value="Login" ></td></tr>
    </table>
    </form>
    <br>
    <div align = "center"> ถ้ายังไม้ได้เป็นสมาชิก <a href="register.php" > กรุณาสมัครสมาชิก</a> </div>
</body>
</html>