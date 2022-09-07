<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <H1 style="font-size: 200%" align = "center "><b> WebBoard JJ </b></H1>
    <hr>   
    <div align = "center">
        <?php 
            $Login = $_POST["Login"];
            $Password = $_POST["Pwd"];
            if($Login =='admin' && $Password =='ad1234')
                echo "ยินดีต้อนรับคุณ ADMIN";     
            elseif($Login =='member' && $Password =='mem1234')
                echo "ยินดีต้อนรับคุณ MEMBER";  
            else
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?>
    <br><a href="index.php" > กลับไปยังหน้าหลัก </a> 
    </div>
</body>
</html>