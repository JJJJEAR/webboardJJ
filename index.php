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
    <form action="post.php" method="get">
        หมวดหมู่:
        <select name="category" >
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        <p style="float:right ;"><a href="login.html">เข้าสู่ระบบ</a><br></p>
        <br>
        <ul>
            <?php 
                for($i=1;$i<=10;$i++) {
                    echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
                }
            ?>

        </ul>   
    </form>
</body>
</html>