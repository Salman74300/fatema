<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
        <!-- Favicons Start Here --> 
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Favicons End Here -->  
        <style>
          body{background: url(https://i.ibb.co/VQmtgjh/6845078.png) no-repeat;
            height: 100vh;font-family: sans-serif;
            background-size: cover;
            background-repeat: no-repeat;background-position: center;overflow: hidden}
            @media screen and (max-width: 600px;){body{background-size: cover;: fixed}}#particles-js{height: 100%}
            .loginBox{position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 350px;min-height: 200px;background: #000000;border-radius: 10px;padding: 40px;box-sizing: border-box}
            .user{margin: 0 auto;display: block;margin-bottom: 20px}
            h3{margin: 0;padding: 0 0 20px;color: #59238F;text-align: center}
            .loginBox input{width: 100%;margin-bottom: 20px}
            .loginBox input[type="Email"], .loginBox input[type="password"]{border: none;border-bottom: 2px solid #262626;outline: none;height: 40px;color: #fff;background: transparent;font-size: 16px;padding-left: 20px;box-sizing: border-box}
            .loginBox input[type="Email"]:hover, .loginBox input[type="password"]:hover{color: #42F3FA;border: 1px solid #42F3FA;box-shadow: 0 0 5px rgba(0,255,0,.3), 0 0 10px rgba(0,255,0,.2), 0 0 15px rgba(0,255,0,.1), 0 2px 0 black}
            .loginBox input[type="Email"]:focus, .loginBox input[type="password"]:focus{border-bottom: 2px solid #42F3FA}
            .inputBox{position: relative}.inputBox span{position: absolute;top: 10px;color: #262626}
            .loginBox input[type="submit"]{border: none;outline: none;height: 40px;font-size: 16px;background: #59238F;color: #fff;border-radius: 20px;cursor: pointer}
            .loginBox a{color: #262626;font-size: 14px;font-weight: bold;text-decoration: none;text-align: center;display: block}a:hover{color: #00ffff}p{color: #0000ff}
        </style>
    </head>
    <body>
        <section class="m-auto "style='height:80vh;width:60%'>
          <div class="loginBox wow bounce"> 
            <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
            <h3>Sign in here</h3>
              <form method="post">
                  <div class="inputBox"> 
                    <input id="uname" type="Email" name="Username" required placeholder="User Id">
                    <input id="pass" type="password" name="Password" required placeholder="Password"> 
                  </div> 
                  <input type="submit" name="Login" value="Login">
              </form> 
            <a href="#">Forget Password<br> </a>
            <div class="text-center">
                <p style="color: #59238F;"><a href="Registation">Sign-Up</a></p>
            </div>
          </div>
        </section>
    </body>
  </html>
  <?php
    error_reporting(0);
    session_start();
    include"Connection.php"; 
      if(isset($_POST['Login'])){
        $Username=mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['Username'])));
        $Password=mysqli_real_escape_string($conn,htmlspecialchars(trim($_REQUEST['Password'])));

        $query="SELECT*FROM `user information` WHERE `User Id`='{$Username}' AND `Password`='{$Password}'";
        $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $User_Id=$row['Id'];
                }
                $_SESSION["User_Id"]=$User_Id;
                header("location:Data");
            echo"<script>swal('Success.','Login Success','success'); </script>";
            }else{
                echo"<script>swal('Failed !','Don`t Match User Id & Password .Try Again','error'); </script>";

                
              }
      }

    ?>