<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <div class="container" >
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
    <?php include "nav.php" ?>
    <br>
    <div class="d-flex">
        <div>
            <label>หมวดหมู่: </label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm"
                type="button" id="button2" data-bs-toggle="dropdown" 
                aria-expanded="false">--ทั้งหมด--</button>
                <ul class="dropdown-menu" aria-labelledby="button2">
                    <li><a href="#" class="dropdown-item">--ทั้งหมด--</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                </ul>
            </span>
        </div>
    </div>
    <br>
    <table class="table table-striped">
   
        <?php 
            for($i=1;$i<=10;$i++) {
                echo "<tr><td><a href=post.php?id="."$i"." style=text-decoration:none>กระทู้ที่ ".$i."</a></td></tr>";
            }
        ?>
    
    </table>  
    </div>
</body>
<?php
    }else{   
?>
<body>
    <div class="container" >
    <H1 style="font-size: 200%"><center><b> WebBoard JJ </b></center></H1>
        <hr>
    <?php include "nav.php" ?>  
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
    </div>
</body>
<?php
    }
?>
</html>