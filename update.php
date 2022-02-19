<?php
    session_start();
    require "dbconfig/config.php";
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
                       <li><a href="adminhome.php">Home</a></li>
                       <li class="current"><a href="adding.php">Management</a></li>
                       <li><a href="About.php">About</a></li>
                       <li><form action="adminhome.php" method="post" style="color: red; cursor: ponter;">
                               <input id="logout-btn" type="submit" placeholder="button" name="logout" value="Logout"  placeholder="button" name="" value="Back" > (<?php echo $_SESSION['username'] ?>)
                           </form></li>
                   </ul>
               </nav>
           </div>
       </header>

<!--      section 2 -->
<!--
       <section>
           <div id="container2">
               <nav>
                   <ul>
                       <li><a href="delete.php">Delete property</a></li>
                       <li><a href="update.php">Update adddress</a></li>
                       
                   </ul>
               </nav>
           </div>
       </section>
-->
       
       <div id="main-wrapper">
         <center>
             <h2>Please Enter your details</h2>
         </center>
		 
          <form class="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		  
		  <script>
			function lettersOnly(input){
				var regex = /[^a-z]/gi;
				input.value = input.value.replace(regex,"");
			}
			function numbersOnly(input){
				var regex = /[^0-9]/g;
				input.value = input.value.replace(regex,"");
			}
			function username(input){
				var regex = /^[a-zA-Z0-9]+$/i;
				input.value = input.value.replace(regex,"");
			}
		  </script>
                            
                            <label><b>Student No.: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;  margin-bottom: 10px;" type="text" placeholder="Enter Student No." name="stNo" value="" onkeyup="numbersOnly(this)" required/><br>
                     
<!--
						   <label><b>Property type: </b></label>
				<select name="PType" title="Type" type="text" style="color: #03AFFA;">
					<option>Mobile</option>
					<option>Non-Mobile</option>
				</select><br>
-->
					
					<!-- <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Property Name" name="property" value="" onkeyup="lettersOnly(this)" required/><br> -->
                           
<!--
                            <label><b>Brand Name: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Brand Name" name="PBrand" value="" required/><br> 
						<label><b>Product Name: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Product Name (e.g. Laptop)" name="PName" value="" onkeyup="lettersOnly(this)" required/><br>
						<label><b>Product Model: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Product Model" name="PModel" value="" required/><br>
-->
						<label><b>Address: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Address" name="Address" value="" required/><br>
<!--
						<label><b>Product Color: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Product Color" name="PColor" value="" onkeyup="lettersOnly(this) required/><br>
-->
					
							
					<a href=""><input class="btn" type="submit" style="width: 100px; background-color: none; border: solid #03AFFA; color: #03AFFA; margin-top: 20px;" placeholder="button" name="update_btn" value="Update" ></a><br>  
                    
          </form>
       
       <?php
	   //logout
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('location:index.php');
        }
		
		//adding products
		if(isset($_POST['update_btn']))
		{
			
			$stNo = $_POST['stNo'];
			$Address = $_POST['Address'];
			
            
            $session = $_SESSION['username'];
            $own = "SELECT * FROM userinfotable WHERE username ='$session' ";
            $query_own= mysqli_query($con,$own);
            $rows = mysqli_fetch_assoc($query_own);
            $stNoc = $rows["stNo"];
            
            $queryUpdate = "UPDATE userinfotable SET Address='$Address' WHERE  stNo='$stNoc'";
            
    
            
            
            
			
			if($stNo!=null)
			{
                
                 if($stNo==$stNoc){   
                    if($Address !=null){
                        $query_update_run= mysqli_query($con,$queryUpdate);
                        if($query_update_run){
                            echo '<script type="text/javascript"> alert("Address successfully Updated!") </script>';
                        }
                        
                    }else{
                        echo '<script type="text/javascript"> alert("Enter Address!") </script>';
                    }
            }else{
                echo '<script type="text/javascript"> alert("Enter your own Student Number!") </script>';
            }
					
				

			}
			else{
					echo '<script type="text/javascript"> alert("Please Enter Student Number") </script>';
				}
		}
					
					
		
        ?>
        
       
</body>
</html>