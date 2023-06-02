<?php

    if(isset($_POST['btnDelete'])){
        $msgID=$_POST['btnDelete'];
        $sql1="DELETE FROM `messages` WHERE `msg_ID`=$msgID";
        $res1=mysqli_query($con,$sql1);

        if($res1){
            $mssg='<div class="alert alert-primary text-center">Message Deleted!</div>';
        }else{
            $mssg='<div class="alert alert-danger text-center">Message Delete Failed!</div>';
        }
    }
    $sql="SELECT `msg_ID`, `name`, `email`, `message` FROM `messages`";
    $res=mysqli_query($con, $sql);
    $data=array();
    while($row=mysqli_fetch_array($res)){
        $tr='<tr><td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['message'].'</td>
            <td>
            <a href="?tab=viewsmsg&&id='.$row['msg_ID'].'" class="btn btn-primary" >
            <i class="bi bi-pen-fill"></i>
            </a>
            <button type="submit" class="btn btn-danger" name="btnDelete" value="'.$row['msg_ID'].'">
            <i class="bi bi-trash"></i></button></tr>';

            array_push($data, $tr);
    }
?>
<div class="view_messages">
    <?php 
        if(isset($mssg)){
            echo $mssg;
        }
    ?>
    <table class="table table-bordered w-75">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <form  method="post">
            <?php
                
                 $pageSize = 10; 
                 $totalItems = count($data);
                 $totalPages = ceil($totalItems / $pageSize);
                 $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
                 $offset = ($currentPage - 1) * $pageSize;
                 $pageData = array_slice($data, $offset, $pageSize);
                foreach ($pageData as $datarow) {
                 echo $datarow;
                }
               
            ?>
             </form>    

        </tbody>
    </table>
        <div>
        <?php
            echo "Pages: ";
            for ($page = 1; $page <= $totalPages; $page++) {
                if ($page == $currentPage) {
                    echo "<strong class='btn btn-primary' style='border-radius:50%;'>$page</strong> "; // Highlight the current page
                } else {
                    echo "<a href='?tab=viewSkill&&page=$page' class='btn btn-secondary' style='border-radius:50%;'>$page</a> ";
                }
            }
        ?>
        </div>
    </div>
</div>