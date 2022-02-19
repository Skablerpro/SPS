<?php
    session_start();
    require "dbconfig/config.php";
	$output = '';
?>
<?php 
//collect
		if(isset($_POST['search_button'])){
			$searchq = $_POST['search'];
			$$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);
			$sql= "SELECT * 
					FROM userinfotable 
					WHERE 
					FName LIKE '%$searchq%' 
					OR LName LIKE '%$searchq%' 
					OR stNo LIKE '%$searchq%' 
					OR email LIKE '%$searchq%'
					OR cell LIKE '%$searchq%'";
			$query = mysqli_query($con, $sql);
			$count = mysqli_num_rows($query);
			if($count ==0){
				$output = 'No search results!';
			}else{
				while($row = mysqli_fetch_array($query)){
				$FName= $row['FName'];
				$LName= $row['Lname'];
				$stNo= $row['stNo'];
				
				$output .= '<div>' .$FName.' '.$LName.' '.$stNo.'</div>';
			}
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security Pass |Management</title>
    <link rel="stylesheet" href="./CSS/Style.css">
</head>
<body>
    <header>
           <div class="container">
               <div id="branding">
                    <a href="adminhome.php" style="font-size: 15px;"><h1><span class="highlight">Security</span> Pass</h1></a>
               </div>
               <nav>
                   <ul>
                       <li class="current"><a  href="adminhome.php">Home</a></li>
                       <li><a href="adding.php">Management</a>
<!--
                           <ul>
                               <li><a href="Adding.php">Add Properties</a></li>
                               <li><a href="delete.php">Delete Property</a></li>
                               <li><a href="update.php">Update Address</a></li>
                           </ul>
-->
                       </li>
                       <li><a href="About.php">About</a></li>
                       <li><form action="adminhome.php" method="post" style="color: red; cursor: ponter;">
                               <input id="logout-btn" type="submit" placeholder="button" name="logout" value="Logout"  placeholder="button" name="" value="Back" > (<?php echo $_SESSION['username'] ?>)
                           </form></li>
                   </ul>
               </nav>
           </div>
       </header>
<!--       Section 1-->
       <Section id="showcase">
           <div class="container">
               <h1>Student and Staff Resource Management</h1>
               <p>Keep track of resource ownership</p>
           </div>
       </Section>
<!--      section 2 -->
       <section id="newsletter">
           <div class="container">
               <h1>Subscribe to our newsletter</h1>
               <form action="AdminHome.php" method="post">
                   <input type="email" placeholder="Enter email address" name="subscribe" >
                   <button type="submit" value=">>" class="btn1" name="search_button">subscribe</button>
               </form>
           </div>
       </section>
	   
       
       
     <section id="boxes">
           <div class="container">
               <div class="box">
                   <a href="adding.php"><img src="./IMG/students.png" ></a>
                   <h3>Add Properties</h3>
                   <!--<p>List of students</p> -->
               </div>
               <!-- <div class="box">
                   <a href="adding.php"><img src="./IMG/employee.jpg" ></a>
                   <h3>Employee properties</h3>
                   
               </div> -->
               <div class="box">
                  <a href="Details.php"><img src="./IMG/property.png" ></a>
                   <h3>List of Properties</h3>
                  <!-- <p>List of Resources Or Properties recorded</p> -->
               </div>
           </div>
       </section>
       
       <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('location:index.php');
        }
		
		
        ?>
		<?php print("$output");?>
        
        
        
       <footer>
           <p>&copy;Security Pass System</p>
       </footer>
</body>
</html>