<?php
    session_start();
    if(!isset($_SESSION['username'])){
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
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
        <hr>
        <?php echo "ผู้ใช้ : $_SESSION[username] " ?> 
        <br>
        <table>
        <tr><td>หมวดหมู่ :</td><td><select name="category" >
                                  <option value="all">--ทั้งหมด--</option>
                                  <option value="general">เรื่องทั่วไป</option>
                                  <option value="learn">เรื่องเรียน</option>
                                  </select></td></tr>  
        <tr><td>หัวข้อ :</td><td><input type="text" name ="หัวข้อ" size="20"></td></tr>
        <tr><td>เนื้อหา :</td><td><textarea name="" id="" cols="20" rows="3"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ" ></td></tr>
        </table>
        
        </ul>   
</body>
</html>