<?php
    session_start();
    require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security Pass |Forgot Password</title>
    <link rel="stylesheet" href="./CSS/Style.css">
</head>
<body style="background: #35424a;">
    <header>
           <div class="container">
               <div id="branding">
                    <a href="index.php" style="font-size: 15px;"><h1><span class="highlight">Security</span> Pass</h1></a>
               </div>
               <nav>
                   <ul>
                       <li><a href="adminhome.php">Home</a></li>
                       <li><a href="adding.php">Management</a></li>
                       <li><a class="current" href="About.php">About</a></li>
                       <li><form action="about.php" method="post" style="color: red; cursor: ponter;">
                               <input id="logout-btn" type="submit" placeholder="button" name="logout" value="Logout"  placeholder="button" name="" value="Back" > (<?php echo $_SESSION['username'] ?>)
                           </form></li>
                   </ul>
               </nav>
           </div>
       </header>
       
       <div class="team-section">
             <h1>Our Team</h1>
             <span class="border"></span>
<!--
            <div class="ps">
               <a href="#p1"><img src="./IMG/p1.png" alt=""></a>
               <a href="#p2"><img src="./IMG/p2.png" alt=""></a>
               <a href="#p3"><img src="./IMG/p3.png" alt=""></a>
               <a href="#p4"><img src="./IMG/p4.png" alt=""></a>
               <a href="#p5"><img src="./IMG/p5.png" alt=""></a>
           </div>
-->
           
<!--
       </div>
       <div class="section2" id="p1">
           <span class="name">Mokati KR</span>
           <span class="border"></span>
           <p>
               Donec iaculis gravida nulla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean id metus id velit ullamcorper pulvinar. Etiam posuere lacus quis dolor.
           </p>
       </div>
       
       <div class="section2" id="p2">
           <span class="name">Manala </span>
           <span class="border"></span>
           <p>
               Donec iaculis gravida nulla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean id metus id velit ullamcorper pulvinar. Etiam posuere lacus quis dolor.
           </p>
       </div>
       
       <div class="section2" id="p3">
           <span class="name">Mokati KR</span>
           <span class="border"></span>
           <p>
               Donec iaculis gravida nulla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean id metus id velit ullamcorper pulvinar. Etiam posuere lacus quis dolor.
           </p>
       </div>
       
       <div class="section2" id="p4">
           <span class="name">Mokati KR</span>
           <span class="border"></span>
           <p>
              Donec iaculis gravida nulla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean id metus id velit ullamcorper pulvinar. Etiam posuere lacus quis dolor. 
           </p>
       </div>
       <div class="section2" id="p5">
           <span class="name">Mokati KR</span>
           <span class="border"></span>
           <p>
               Donec iaculis gravida nulla. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean id metus id velit ullamcorper pulvinar. Etiam posuere lacus quis dolor.
           </p>
       </div>
       
-->
       
       
       <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('location:index.php');
        }
        ?>
        
</body>
</html>