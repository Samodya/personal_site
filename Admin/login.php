<?php
session_start();
    $username="Chanaka";
    $pw="Chanaka123";

    if(isset($_POST['btnLog'])){
        $un=$_POST['txtUn'];
        $pass=$_POST['txtpw'];

        if($un==$username ){
            if($pass==$pw){
                $msg="<div class='bg-success text-light msg'> login sucess!</div>";
                if(!isset($_SESSION["usname"])){
                    $_SESSION["usname"]=$un;
                }
                header("location:index.php?tab=home");
            }else{
                $msg="<div class='bg-danger text-light msg'> login failed! invalid User.</div>";
            }
            
        }else{
            $msg="<div class='bg-danger text-light msg'> login failed! invalid User.</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="logmenu">
        <?php
            if(isset($msg)){
                echo $msg;
            }
        ?>
        <div class="logpg bg-primary">
            <h1 style="text-align:center">Login</h1>
            <form width="100%" action="" method="post">
            <ul>
                <li><i class="bi bi-person-fill"></i>username</li>
                <li><input type="text" name="txtUn" class="form-control" id=""></li>
                <li><i class="bi bi-lock-fill"></i> password</li>
                <li><input type="password" name="txtpw" class="form-control" id=""></li>
                <button type="submit" name="btnLog" class="btn btn-danger mt-2 fw-bold">
                    <i class="bi bi-box-arrow-in-right"></i> Login</button>
            </ul>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>