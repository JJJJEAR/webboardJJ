<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
        <hr>
    <div align = "center"> 
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?> <br>
        <table style="border: 2px solid black; width : 40%" align="center">
        <tr><td style="background-color:#6CD2FE" >แสดงความคิดเห็น</td></tr>
        <tr><td colspan="2"><textarea name="" id="" cols="100" rows="4"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table><br>
        <a href="index.html" > กลับไปยังหน้าหลัก </a> 
    </div>
</body>
</html>