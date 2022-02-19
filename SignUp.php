<?php
    require "dbconfig/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security Pass |Sign up</title>
    <link rel="stylesheet" href="./CSS/Style.css">
	
	<script>
		function validateForm() {
		var x = document.forms["myForm"]["fname"].value;
		if (x == "") {
			alert("Fill in all fields");
        return false;
		}
	}
</script>
</head>
<body>
    <header>
           <div class="container">
               <div id="branding">
                   <h1><span class="highlight">Security</span> Pass</h1>
               </div>
               <!-- <nav>
                   <ul>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="AdminHome.php">Management</a></li>
                       <li><a href="About.php">About</a></li>
                   </ul>
               </nav> -->
           </div>
       </header>
       <div id="main-wrapper">
         <center>
             <h2>Please Enter your details</h2>
         </center>
          <form class="myform" action="signup.php" method="post">
		  <script>
			function lettersOnly(input){
				var regex = /[^a-z]/gi;
				input.value = input.value.replace(regex,"");
			}
			function numbersOnly(input){
				var regex = /[^0-9]/g;
				input.value = input.value.replace(regex,"");
			}
		  </script>
                            <label><b>First Names: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter first Name" name="Fname" value="" onkeyup="lettersOnly(this)" required/><br>
                            <label><b>Surname: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Surname" name="Lname" value="" onkeyup="lettersOnly(this)" required/><br>
                            <label><b>Gender: </b></label>
                    <input style="color:  #167ade;" type="radio" class="radiobtns" name="gender" value="male" checked required><label>Male</label>
                    <input style="color:  #167ade;" type="radio" class="radiobtns" name="gender" value="female"  required><label>Female</label> <br>
                            <label><b>Student No.: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Student No." name="stNo" value="" onkeyup="numbersOnly(this)" required/><br>
                          <label><b>Date Of birth:</b></label>
					<input class="inputvalues" style="color:  #167ade;" type="date" name="DoB"/><br>
					<!--<select aria-label="Day" name="birthday_day" id="day" title="Day" style="color: #03AFFA;">
							<option value="0">Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20" selected="1">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>
							<select aria-label="Month" name="birthday_month" id="month" title="Month" style="color: #03AFFA;">
							<option value="0">Month</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8" selected="1">Aug</option>
							<option value="9">Sept</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
							</select>
							<select aria-label="Year" name="birthday_year" id="year" title="Year" style="color: #03AFFA;">
							<option value="0">Year</option>
							<option value="2013">2018</option>
							<option value="2013">2017</option>
							<option value="2013">2016</option>
							<option value="2013">2015</option>
							<option value="2013">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993" selected="1">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
							<option value="1919">1919</option>
							<option value="1918">1918</option>
							<option value="1917">1917</option>
							<option value="1916">1916</option>
							<option value="1915">1915</option>
							<option value="1914">1914</option>
							<option value="1913">1913</option>
							<option value="1912">1912</option>
							<option value="1911">1911</option>
							<option value="1910">1910</option>
							<option value="1909">1909</option>
							<option value="1908">1908</option>
							<option value="1907">1907</option>
							<option value="1906">1906</option>
							<option value="1905">1905</option>
							</select><br>-->
					
						   <label><b>Qualification: </b></label>
                    <select name="qualification" class="qualification" style="color: #03AFFA;">
                        <option value="BSc">BSc</option>
                        <option value="BA">BA</option>
                        <option value="BCom">BCom</option>
                        <option value="BEd">BEd</option>
                        <option value="BNur">BNur</option>
                        <option value="BOpt">BOpt</option>
                        <option value="Hon">Hon</option>
                        <option value="MSc">MSc</option>
                        <option value="PhD">PhD</option>
                    </select><br>
                           
                            <label><b>E-mail: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="email" placeholder="Enter Email" name="Email" value="" required/><br>   
                            <label><b>Cellphone No.: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="phone" placeholder="Enter Cellphone No." name="cell" value="" onkeyup="numbersOnly(this)" required/><br>  
                            <label><b>Username: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="text" placeholder="Enter Username" name="username" value="" required/><br>  
                            <label><b>Password: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="password" placeholder="Enter Password" name="password" value="" required/><br>   
                            <label><b>Confirm Password: </b></label><br>
                    <input class="inputvalues" style="color:  #167ade;" type="password" placeholder="Confirm Password" name="cpassword" value="" required/><br>
                    <a href=""><input id="signup_btn" type="submit" style=" width: 150px; margin: 5px; border: 2px solid;" placeholder="button" name="submit_btn" value="Sign up" ></a><br>  
                    <a href="index.php"><input class="btn" type="button" style="width: 100px; background-color: orangered; border: solid grey; color: #f4f4f4;" placeholder="button" name="" value="Back" ></a>
          </form>
          
          <?php 
//                    global $username, $Fname, $Lname, $gender, $qualification, $stNo, $Email, $cell, $DoB, $password, $cpassword;
                    
                    if(isset($_POST['submit_btn']))
                    {
                        
                        $username = $_POST['username'];
                        $Fname = $_POST['Fname'];
                        $Lname = $_POST['Lname'];
                        $Gender = $_POST['gender'];
                        $qualification = $_POST['qualification'];
                        $stNo = $_POST['stNo'];
                        $Email = $_POST['Email'];
                        $cell = $_POST['cell'];
                        $DoB = $_POST['DoB'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['cpassword'];
                          
						if($stNo>=200000000 && $stNo<=300000000)
						{
								if($password==$cpassword )
							{
								$query= "select * from userinfotable WHERE username='$username' ";
								$query_run= mysqli_query($con,$query);

								if(mysqli_num_rows($query_run)>0) 
								{
									//username already exists.
									echo '<script type="text/javascript"> alert("Username already exists... try another") </script>';
								}
								else
								{
									$query= "insert into userinfotable values('','$username','$Fname','$Lname','$Gender','$qualification','$stNo','$Email','$cell','$DoB','$password')";
									$query_run= mysqli_query($con,$query);

									if($query_run)
									{
										echo '<script type="text/javascript"> alert("User registerd...go to login page to login.") </script>';
									}
									else
									{
										echo '<script type="text/javascript"> alert("Error!!") </script>';
									}
								}

							}
							else{
									echo '<script type="text/javascript"> alert("Passwords do not match!") </script>';
								}
						}
						else{
							echo '<script type="text/javascript"> alert("student number invalid!") </script>';
						}
                        
                    }
                ?>
           
       </div>
       

</body>
</html>