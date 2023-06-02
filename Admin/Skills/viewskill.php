<?php
    
    
   if(isset($_POST['btnDelete'])){
    $skid=$_POST['btnDelete'];
    $sql1="DELETE FROM `skill` WHERE `skill_id`=$skid";
    $res1=mysqli_query($con, $sql1);
   

    if($res1){
        $mssg='<div class="w-50 alert alert-success text-center">
            Record Deleted!
        </div>';
    }else{
        $mssg='<div class="w-50 alert alert-success text-center">
        Record Delete Failed!
    </div>'; 
    }
   }

   $sql="SELECT `skill_id`, `skill_name`, `skill_amount` FROM `skill`";
    $res=mysqli_query($con, $sql);

    $data=array();
    while ($row=mysqli_fetch_array($res)) {
        $tr= '<tr>
            <td>'.$row['skill_name'].'</td>
            <td>'.$row['skill_amount'].'</td>
            <td><a href="?tab=editskill&&id='.$row['skill_id'].'" class="btn btn-primary" >
                    <i class="bi bi-pen-fill"></i>
                </a>
                <button type="submit" class="btn btn-danger" name="btnDelete" value="'.$row['skill_id'].'">
                <i class="bi bi-trash"></i></button>
            </td>
        </tr>';
        array_push($data, $tr);
        
     }
    
?>



<div class="view_skill">
    <?php
        if(isset($mssg)){
            echo $mssg;
        }
    ?>
    <table class="table table-bordered table-striped w-50">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <form  method="post">
            <?php
                
                 $pageSize = 6; 
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