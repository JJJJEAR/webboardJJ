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
        <b>ต้องการดูกระทู้หมายเลข </b><?php echo $_GET["id"]; ?> 
        <br><b><?php 
            $n = $_GET["id"];
            if(($n % 2)==0)
                echo "เป็นกระทู้หมายเลขคู่";
            else 
                echo "เป็นกระทู้หมายเลขคี่";
        ?></b>
        <br><br>
        <table style="border: 2px solid black; width : 40%" align="center">
        <tr><td style="background-color:#6CD2FE"><b>แสดงความคิดเห็น</b></td></tr>
        <tr><td colspan="2"><textarea name="" id="" cols="100" rows="4"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table><br>
        <a href="index.php" > กลับไปยังหน้าหลัก </a> 
    </div>
</body>
</html>