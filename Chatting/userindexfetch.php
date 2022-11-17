<?php
session_start();
include 'connection.php';
include 'function.php'; 

    $u_id=$_GET['u_id'];
    $sql="select * from tbl_users where u_id!=$u_id ";
    $query=mysqli_query($conn,$sql);
    
    // $outputdata="";

    if(mysqli_num_rows($query)>0)
    {
        $touserid=0;
        while($row=mysqli_fetch_array($query))
        { 
            ?>
            <a class="linkright"  href="index3.php?touserid=<?=$row['u_id']?>&&fromuserid=<?=$u_id?>">
                <div class="block active" id="content">
                
                    <div class="imgBox">
                        <img src="images/<?=$row['user_image']?>" class="cover" alt="Avatar" class="cover">
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
  
  
    // print_r($outputdata);
    // echo $output;
    // echo json_encode($outputdata);
    

?>
<!-- <script>
$(document).ready(function() {
    $(".linkright").on('click',function()
    {
        let id=$(this).attr('id');
        let arr = id.split('_');
        touserid=arr[0];
        fromuserid=arr[1];
        $("#simpledata").text(touserid); 
        $("#simpledata2").text(fromuserid);
        $("#personname").text($("#textname_"+touserid+"_"+fromuserid).text());
        $('#personimg').attr('src',$('#userimgg_'+touserid+"_"+fromuserid).attr('src'));
        
        
    });
});</script>
   -->