<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>

        <?php 

            $Login = $_POST["Login"];
            $Password = $_POST["Pwd"];
            if($Login =='admin' && $Password =='ad1234'){            
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
                header("location:index.php");
                die();
            }
            elseif($Login =='member' && $Password =='mem1234'){
                
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
                header("location:index.php");
                die();
            }
            else{
                $_SESSION['error']='error';
                header("location:login.php");
                die();
            }
                
        ?>
