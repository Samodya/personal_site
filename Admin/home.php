<?php
    $sql="SELECT `msg_ID`, `name`, `email`, `message` FROM `messages`";
    $res=mysqli_query($con, $sql);

    $sql1="SELECT `skill_id`, `skill_name`, `skill_amount` FROM `skill`";
    $res1=mysqli_query($con, $sql1);

?>
<div class="home_dis">
    <div class="row home_row">
        <div class="col-md-6 ">
            <div class="card_home">
                <div class="card_top">
                    <h1>Skill</h1>
                    <h1><i class="bi bi-tools"></i></h1>
                </div>
                <div class="card_bottom">
                    <h3>Total Skills</h3>
                    <h1><?php echo mysqli_num_rows($res1) ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card_home">
                <div class="card_top">
                    <h1>Messages</h1>
                    <h1><i class="bi bi-chat-left-text-fill"></i></h1>
                </div>
                <div class="card_bottom">
                    <h3>Total Messages</h3>
                    <h1><?php echo mysqli_num_rows($res) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row home_row">
        <div class="col-md-6 ">
            <div class="card_home">
                <div class="card_top">
                    <h1>Portfolios</h1>
                     <h1><i class="bi bi-cash-stack"></i></h1>
                </div>
                <div class="card_bottom">
                    <h3>Total Skills</h3>
                    <h1><?php echo mysqli_num_rows($res) ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card_home">
                <div class="card_top">
                    <h1>Images</h1>
                    <h1><i class="bi bi-image"></i></h1>
                </div>
                <div class="card_bottom">
                    <h3>Total Skills</h3>
                    <h1><?php echo mysqli_num_rows($res) ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>