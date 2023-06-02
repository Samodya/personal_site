<?php
    $skid=$_GET['id'];
   
    if(isset($_POST['btnupdate'])){
        $skill=$_POST['txtSkill'];
        $level=$_POST['txtlevel'];
         $sql1="UPDATE `skill` 
        SET `skill_name`='$skill',`skill_amount`='$level' 
        WHERE `skill_id`=$skid";
        $res1=mysqli_query($con, $sql1);

        if($res1){
            $mssg="Skill Updated!";
        }else{
            $mssg="Failed to update the skill!";
        }
    }

    $sql="SELECT `skill_id`, `skill_name`, `skill_amount` FROM `skill` WHERE `skill_id`=$skid";
    $res=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($res);

?>
<div class="skill_mng">
    <?php
        if(isset($mssg)){
            echo '<div class="w-50 bg-primary text-light p-2 text-center mb-2 msg">'.$mssg.'</div>';
    }?>
    <form method="post" class="form bg-secondary w-50 p-5">
        <ul style="list-style:none">
            <li><b>Skill</b></li>
            <li><input class="form-control"type="text" name="txtSkill" value="<?php echo $row['skill_name']?>"></li>
            <li><b>Level</b></li>
            <li><input class="form-control" type="number" name="txtlevel" value="<?php echo $row['skill_amount']?>"></li>
            <li><button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
                <a href="?tab=viewSkill" class="btn btn-danger">View Skills</a>
            </li>
        </ul>
    </form>
</div>