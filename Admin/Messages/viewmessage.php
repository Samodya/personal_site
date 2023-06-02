<?php
    $id=$_GET['id'];

    $sql="SELECT `msg_ID`, `name`, `email`, `message` FROM `messages` WHERE `msg_ID`=$id";
    $res=mysqli_query($con, $sql);

    $row=mysqli_fetch_assoc($res)
?>
<div class="content_msg">
    <div class="msg_class">
        <form class="form" method="post">
            <ul>
                <li><b>Name: </b></li>
                <li><input class="form-control" type="text" value="<?php echo $row['name']?>"
                    name="txtnameM" id="" Disabled></li>
                <li><b>Email: </b></li>
                <li><input class="form-control"type="text" value="<?php echo $row['email']?>"
                    name="txtmialM" id="" Disabled></li>
                <li><b>Message: </b></li>
                <li><textarea name="form-control" id="" cols="145" rows="10"Disabled><?php echo $row['message']?></textarea></li>
            </ul>
        </form>
    </div>
</div>