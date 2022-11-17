<?php
	
    session_start();
        // if(isset($_SESSION['userlist'][0]["email"]))
        // {
        //     header('location:http://localhost/chatting/index.php');
        // }
        // if (isset($_SESSION['admin'])) 
        // {
        //         header('location:http://localhost/chatting/dashboardhome.php');	
        // }
         
    $serverName="localhost";
    ?> 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        #text_hide {
            display: none;
        }
        
        .btn:hover+#text_hide {
            display: block;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action="http://<?=$serverName?>/chatting/LoginCheck.php" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="suja@gmailcom" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password">
                    </div>
                    <input type="submit" value="Log In" class="btn solid" />
                </form>
                <form method="post" action="http://<?=$serverName?>/chatting/userinsert.php" enctype="multipart/form-data" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                       <input type="text" name="full_name" placeholder="fullname" ></br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text"  placeholder="suja@gmail.com" name="email" ></br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-address-book"></i>
                        <input type="text" name="address" placeholder="address"></br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone-alt"></i>
                        <input type="number" name="phone" placeholder="phone number"></br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-calendar"></i>
                        <input type="date" name="date_of_birth"></br>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-file-image"></i>
                        <input type="file" name="file" value="" id="img" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="enter 6 digit password"></br>
                    </div>
                    <input type="Submit" name="submit" class="btn" value="Sign Up">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p> </p>

                    <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
                </div>
                <img src="firstimage.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Register </p>

                    <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
                </div>
                <img src="firstimage.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>