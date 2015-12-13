<?php 
    session_start();
    error_reporting(E_ALL); //I missed the real line of code that Baya had here, but I think it was like this line and the next's
    ini_set('display_errors', '0');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>AMANDA'S ORCHID LOGIN</title>
    <link rel="stylesheet" href="css/newstyle.css" >
  </head>
  <body>
    
    <?php include "connectdb.php" ?>
		
		<?php 
		    if ($_SESSION["user"]=="" || $_SESSION["user"]=="undefined"){

		 ?>
    <nav>
		    <ul>
		        <li>Log In</li>
		    </ul>
		</nav>

		<?php 
		    } else {
		        ?>


		        <nav>
		            <ul>
		                <li>Log Out</li>
		            </ul>
		        </nav>

		        <?php
		    }

		 ?>

		<p>Enter your username and password <br>
		    <?php print $_GET["msg"] ?>
		</p>
   
    <?php 

			if (!isset($_POST['loginName'], $_POST['userPassword'])){
//				$_SESSION['msg'] = "Please enter valid username and password";

			} else {

				// $strlogin = $_POST['fuser']; //previously taught way, but is less secure (or something)

				// if we are here, the data is valid and we can insert it into database
				$strlogin = filter_var($_POST['loginName'], FILTER_SANITIZE_STRING);
				$strPwd = filter_var($_POST['userPassword'], FILTER_SANITIZE_STRING);


				// Retrieve username and password from database according to user's input
				$stmt = mysql_query("Select * from aosuser where (userName='".$strlogin ."') and (pwd= '".$strPwd."')");

				// Check username and password match
				$num_rows = mysql_num_rows($stmt);
				if ($num_rows != 1) {

					$_SESSION["user"]="";
					$_SESSION["mes"]="login failed";
					mysql_close($link);

					//header('Location: index.php?msg="Login failed"');'
					?>
					<!--<meta http-equiv="refresh" content="0;URL=index.php?msg='Login failed'" />-->
					<?php


				} else {
					$_SESSION["user"]="$strlogin";
					$_SESSION["mes"]="";
					mysql_close($link);

					?>
					<!--<meta http-equiv="refresh" content="0;URL=Home.php" />-->
					<?php
				}

			}


		 ?>
   
    <header>
      <div id="shop">
        <div id="logo">
          <img src="images/logo_outline2.svg" alt="logo"/>
        </div>  <!-- end #logo -->
        <div id="companyName">
          <h1>Amanda's</h1>
          <h1>Orchid</h1>
          <h1>Shop</h1>
        </div>  <!-- end #companyName -->
      </div>  <!-- end #shop -->
    </header>
    
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="login.php"  class="active">LOG IN</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>      
    
    <main>
      <form  id="registerForm" method="post" action="store.php">
       <h3>LOG IN</h3>
        <div class="formElements">
          <label>Email: </label>
          <input type="text" name="loginName" id="loginName" value="<?php echo $userName; ?>" placeholder="Your Email: " required>
          <label>Password: </label>
          <input type="password" name="userPassword" id="userPassword" value="<?php echo $password; ?>" required>
            <br>
            <br>
            <br>
            <input type="submit">
            <input type="reset">
         </div>   <!-- end .formElements -->

      </form>
    </main>

    <footer>
        <ul>
          <li><a href="index.php" >HOME</a></li>
          <li><a href="login.php" class="active2">LOG IN</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>  
      <p>Music: http://www.purple-planet.com</p>
    </footer>
    <?php
    // put your code here
    ?>
    <script src="js/sound.js" type="text/javascript"></script>
  </body>
</html>
