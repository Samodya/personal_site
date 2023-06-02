<?php
  $tab=$_GET['tab'];
require_once("../connection.php");
session_start();

if(isset($_POST['btnLout'])){
  unset($_SESSION["usname"]);
}
  if(!isset($_SESSION["usname"])){
    header("location:login.php");
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
    <div class="adminContent">
        <?php
            include("../includes/sidemenu.php");
        ?>

    <div class="pg_content">
      <?php
      
          if($tab=="skill"){
            include("Skills/manageskill.php");
          }elseif($tab=="home"){
            include("home.php");
          }elseif($tab=="viewSkill"){
            include("Skills/viewskill.php");
          }elseif($tab=="editskill"){
            include("Skills/editskill.php");
          }elseif($tab=="message"){
            include("Messages/viewmessages.php");
          }elseif($tab=="viewsmsg"){
            include("Messages/viewmessage.php");
          }
        
      ?>
        
    </div>
    </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>