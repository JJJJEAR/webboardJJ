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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <H1 style="font-size: 200%"><center><b> สมัครสมาชิก </b></center></H1>
        <hr>
    <table style="border: 2px solid black; width : 40%" align="center">
        <tr><td style="background-color:#6CD2FE" colspan="2" size="50">กรอกข้อมูล</td></tr>
         <tr><td>ชื่อบัญชี:</td><td><input type="text" name ="first name" size="30"></td></tr><br>
         <tr><td>รหัสผ่าน:</td><td><input type="text" name ="Lastname" size="30"></td></tr><br> 
         <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name ="Full name" size="30"></td></tr><br>
         <tr><td></td><td><input type="radio" name="Male" value="M"> ชาย</td></tr>
         <tr><td>เพศ:</td><td><input type="radio" name="Female" value="F"> หญิง</td></tr>
         <tr><td></td><td><input type="radio" name="other" value="O"> อื่นๆ</td></tr>
         <tr><td>อีเมล:</td><td><input type="text" name ="Email" size="30"></td></tr><br> 
         <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก" ></td></tr>
    </table>
    <br>
    <div align = "center"><a href="index.php" > กลับไปยังหน้าหลัก </a> </div>
</div> 
</body>
</html>