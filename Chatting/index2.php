<?php
session_start();
include 'connection.php';
include 'function.php';
$_serverName="localhost";
// if(!isset($_SESSION['email']))
// {
//     header('location:http://localhost/chatting/Login.php');
// }
if($_GET)
{
    $u_id=$_GET['u_id'];
    
    if(findUser($u_id))
    {
        $userdetail=findUserDetail($u_id);

    }
    // print_r($_SESSION['userlist']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style4.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/23e469355a.js" crossorigin="anonymous"></script>
    <script>
        var touserid=0;
        var fromuserid=0;
    </script>
</head>

<body>
    <div class="container">
        <div class="leftSide">
            <!-- Header -->
            <div class="header">
                <div class="userimg">
                    <img src="images/<?=$userdetail['user_image']?>" alt="" class="cover">
                </div>
                
                        <div class="listHeads">
                            <h4><?=$userdetail['fullname']?></h4>
                        </div>
        
              
                
                    <div class="logout">
                        <a href="http://<?=$_serverName?>/chatting/Logout.php?u_id=<?=$userdetail['user_id']?>">Log out</a>
                    </div>
            </div>
            <!-- Search Chat -->
            <div class="search_chat">
                <div>
                    <input id="search_text" type="text" placeholder="Search or start new chat" name="search_text">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
            </div>
            <!-- CHAT LIST -->
            <div class="chatlist" id="userlist">           
                
            </div>
        </div>

        <!-- <div class="center" id="simpledata3">
            
            </div>
            <div class="center" id="simpledata4">
            <img id="simpledata5" src="">
            </div> -->


        
    </div>
    
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/main.js"></script>

<?php
echo "<script>
var u_id=".$userdetail['user_id'].";
</script>"?>
 
 
</body>

</html>