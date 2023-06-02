<?php
require_once("connection.php");
$sql="SELECT `skill_id`, `skill_name`, `skill_amount` FROM `skill`";
$res=mysqli_query($con, $sql);
$prog=53;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Personal Site</title>
</head>
<body>
    <?php
        include("includes/nav.php");
    ?>
    <div class="banner bg-secondary text-light">
        <div class="img">
            <img src="images/mood-board.png" alt="">
        </div>
        <div class="banner_text">
            <h1>hi I'm Chanaka</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Architecto, itaque dolore perspiciatis vel nostrum quod magni? Natus dolor error repudiandae, itaque et, at voluptas laboriosam porro saepe assumenda dolores doloremque.</p>
        </div>
    </div>
    <div class="content">
        <h1>Skills</h1>
        <div class="progr">
            <?php
                while($row=mysqli_fetch_array($res)){

            ?>
            <p><b><?php echo $row['skill_name']?></b></p>
            <div class="progress bg-secondary" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $row['skill_amount']?>%;" aria-valuenow="<?php echo $row['skill_amount']?>" aria-valuemin="0" aria-valuemax="100">
                <?php echo $row['skill_amount']?>%
            </div>
            </div>
            <?php  }
            ?>
            
            
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>