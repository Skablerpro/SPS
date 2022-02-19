
<?php
    session_start();
    require "dbconfig/config.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security Pass |Results</title>
    <link rel="stylesheet" href="./CSS/Style.css">
</head>
<body>
    <header>
         <div class="container">
               <div id="branding">
                   <h1><span class="highlight">Security</span> Pass</h1>
               </div>
               <nav>
                   <ul>
                       <li><a href="AdminHome.php">Home</a></li>
                       <li><a href="AdminHome.php">Management</a></li>
                       <li><a href="About.php">About</a></li>
                       <li><form action="adminhome.php" method="post" style="color: red; cursor: ponter;">
                               <input id="logout-btn" type="submit" placeholder="button" name="logout" value="Logout"  placeholder="button" name="" value="Back" > (<?php echo $_SESSION['username'] ?>)
                           </form></li>
                   </ul>
               </nav>
           </div>
    </header>
	
	<!--      section 2 -->
       <section id="newsletter">
           <div class="container">
               <h1 style="float: center;">Here Are The Properties Registerd To You</h1>
               
               <form action="Print.php" method="post">
<!--                   <input type="text" placeholder="search" name="search" >-->
                   <button href="Print.php" type="submit" value=">>" class="btn1" name="search_button">Print</button>
               </form>
           </div>
       </section>
<!--
      <div id="main-wrapper">
          <center>
             <h2>Results Found: </h2>
         </center>
      </div>
-->
       <table>
           <tr>
               <th>First Name </th>
               <th>Surname </th>
			   <th>Student Number </th>
               <th>E-mail </th>
               <th>Cellphone No. </th>
               <th>Product Brand </th> 
			   <th>Product Name </th> 
			   <th>Product Model </th>
			   <th>Product Serial </th>
			   <th>Product Color </th>
			   <th>Product Type </th>
           </tr>
           
           <?php
               // $query= "SELECT Fname, lname, stNo, email, cell FROM userinfotable";
                $session = $_SESSION['username'] ;
                
           
			   $query= "SELECT
							userinfotable.Fname,
							userinfotable.lname,
							userinfotable.stNo,
							userinfotable.email,
							userinfotable.cell,
							producttable.PBrand,
							producttable.PName,
							producttable.PModel,
							producttable.PSerial,
							producttable.PColor,
							producttable.PType
						FROM
							userinfotable
						INNER JOIN producttable 
						WHERE userinfotable.stNo = producttable.stNo AND userinfotable.username = '$session'
						ORDER BY userinfotable.stNo";
						
                $query_run= mysqli_query($con,$query);
				$pTable_query= "SELECT PBrand,PName,PModel,PSerial,PColor,PType FROM producttable";
				$pquery_run=mysqli_query($con,$query);

				/* $prod_query= " SELECT * FROM producttable WHERE userinfotable.stNo = producttable.stNo";
				$Pquery_run= mysqli_query($con,$query);
				
                $query1= "SELECT PBrand, PName, PModel, PSerial, PColor FROM producttable";
                $query_run1= mysqli_query($con,$query1); */
				
                if(mysqli_num_rows($query_run)>0 )
					
                {
                    while($row= mysqli_fetch_assoc($query_run)){
                        echo "<tr><td>" . $row["Fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["stNo"] . "</td><td>" . $row["email"] . "</td><td>" . $row["cell"] . "</td><td>" . $row["PBrand"] . "</td><td>" . $row["PName"] . "</td><td>" . $row["PModel"] . "</td><td>" . $row["PSerial"] . "</td><td>" . $row["PColor"] . "</td><td>" . $row["PType"] . "</td><td>";
                        
                        /* while($row1= mysqli_fetch_assoc($query_run1)){
                        echo $row1["PBrand"];  
                    }*/
					
                    }
                    
                    
                    echo "</table>";
                }
                else{
                    echo "0 results!";
                }
           ?>
       </table>
       
       
    
</body>
</html>