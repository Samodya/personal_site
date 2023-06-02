<?php
    if(isset($_POST['btnAdd'])){
        $skill=$_POST['txtSkill'];
        $level=$_POST['txtlevel'];
        $sql="INSERT INTO `skill`(`skill_name`, `skill_amount`) VALUES ('$skill','$level')";
        $res=mysqli_query($con, $sql);

        if($res){
            $mssg="Skill Added!";
        }else{
            $mssg="Failed to add the skill!";
        }
    }

?>
<div class="skill_mng">
    <?php
        if(isset($mssg)){
            echo '<div class="w-50 bg-primary text-light p-2 text-center mb-2 msg">'.$mssg.'</div>';
    }?>
    <form method="post" class="form bg-secondary w-50 p-5">
        <ul style="list-style:none">
            <li><b>Skill</b></li>
            <li><input class="form-control"type="text" name="txtSkill" ></li>
            <li><b>Level</b></li>
            <li><input class="form-control" type="number" name="txtlevel" ></li>
            <li><button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
                <a href="?tab=viewSkill" class="btn btn-danger">View Skills</a>
            </li>
        </ul>
    </form>
</div>
