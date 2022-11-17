<?php
session_start();
include 'connection.php';
include 'function.php'; 

if(isset($_POST["input"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["input"]);
 $query = "SELECT * FROM tbl_users
  WHERE full_name LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM tbl_users ORDER BY u_id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {?>
     <a class="linkright"  href="index3.php?touserid=<?=$row['u_id']?>&&fromuserid=<?=$u_id?>">
                <div class="block active" id="content">
                
                    <div class="imgBox">
                        <img  src="images/<?=$row['user_image']?>" class="cover" alt="Avatar" class="cover">
                    </div>
                    <div class="details">
                        <div class="listHead">
                            <h4><?=$row['full_name']?></h4>
                        </div>
                        <div class="message_p">
                            <p><?=$row['status']=='1'?"Active Now" :"Not Active"?></p>
                        </div>
                    </div>
                  
                </div>
            </a> 
    <?php
 }
}
else
{?>
    <div class="block active"  id="content">
        <p>Data is not Found!!!!</p>
</div>
        <?php
}

?>
