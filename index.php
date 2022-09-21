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
<?php
    if(!isset($_SESSION['id'])){
?>
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
        <p style="float:right ;"><a href="login.php">เข้าสู่ระบบ</a><br></p>
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
<?php
    }else{   
?>
<body>
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
        <hr>
    <form action="post.php" method="get">
        หมวดหมู่ :
        <select name="category" >
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="learn">เรื่องเรียน</option>
        </select>
        
        <div style="float: right;">
            <?php echo " ผู้ใช้งานในระบบ : $_SESSION[username]"; ?>&nbsp;&nbsp;
            <a href="logout.php">ออกจากระบบ</a>
        </div> 
        <br>
        <a href="newpost.php">สร้างกระทู้ใหม่</a>
        <br>
        <ul>
            <?php 
                for($i=1;$i<=10;$i++) {
                    echo "<li>";
                    echo "<a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a>" ; 
                if($_SESSION['role']=='a')
                    echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";     
                }
                    echo "</li>";
            ?>

        </ul>   
    </form>
</body>
<?php
    }
?>
</html>