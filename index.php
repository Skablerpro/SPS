<?php
    session_start();
    require "dbconfig/config.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href= "./CSS/Style.css" />
        <link rel="icon" href="favicon.ico" />
        <title>Security Pass |Login</title>
    </head>
    
    <body>
    <header>
           <div class="container">
               <div id="branding">
                    <h1 style="font-size: 30px; text-transform: uppercase;"><span class="highlight" >Security</span> Pass</h1>
               </div>
<!--
               <nav>
                   <ul>
                       <li class="current"><a href="index.php">Home</a></li>
                       <li ><a href="adminhome.php">Management</a></li>
                       <li><a href="About.php">About</a></li>
                   </ul>
               </nav>
-->
           </div>
       </header>
       
           <div id="main-wrapper">
              <center>
                    <h2>Please Login</h2>
                    <img src="./IMG/avatar.png" class="avatar"/>
              </center>

           <form class="myform" action="index.php" method="post">
<!--
                    <input style="color: aqua;" type="radio" class="radiobtns" name="restrict" value="admin" checked required><label>admin</label>
                    <input style="color: aqua;" type="radio" class="radiobtns" name="restrict" value="student"  required><label>student</label> <br>
-->
               <label>Username:</label><br>
                <input  class="inputvalues" style="color: aqua;" type="text" placeholder="Enter Username" name="username" value=""><br>
                <label>Password:</label><br>
                <input class="inputvalues" style="color: aqua;" type="password" placeholder="Enter password" name="password" value=""><br>
                <input type="submit" id="login_btn" name="login" value="Login">
               <a href="SignUp.php"><input type="button" id="signup_btn" name="signup" value="SignUp"></a>
                
                
                 <a href="ForgotPassword.php">Forgot Password?</a>
           </form>
           </div>
        
           <?php
                if(isset($_POST['login']))
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    
                    $query= "select * from userinfotable WHERE username='$username' AND password='$password'";
                    $query_run= mysqli_query($con,$query);
                    if(mysqli_num_rows($query_run)>0)
                    {
                        //valid
                        $_SESSION['username']=$username;
                        header('location:adminhome.php');
                    }
                    else
                    {
                     //invalid
                        echo '<script type="text/javascript"> alert("Username or Password Invalid!") </script>';
                    }
                }
        
            ?>
       
  <!-- 

      <a href="SignUp.php" action="signup.php"><input type="button" class="btn" style="text-align= inline;"  placeholder="button" name="signup" value="Sign up" ></a>
       <header>
           <div class="container">
               <div id="branding">
                   <h1>Security Pass</h1>
               </div>
               <nav>
                   <ul>
                       <li class="current"><a href="index.php">Home</a></li>
                       <li><a href="adminhome.php">Management</a></li>
                       <li><a href="About.php">About</a></li>
                   </ul>
               </nav>
           </div>
       </header>
       

       <Section id="showcase">
           <div class="container">
               <h1>Stunent and Staff Resource Management</h1>
               <p>Keep track of resource ownership</p>
           </div>
       </Section>
       

       <section id="newsletter">
           <div class="container">
               <h1>Subscribe To Our Newsletter</h1>
               <form>
                   <input type="email" placeholder="Enter E-mail">
                   <button type="submit" class="btn">Subscribe</button>
               </form>
           </div>
       </section>
       -->
       
      
        
        


    </body>
</html>