
    <?php include "connectdb.php" ?>
		
		<?php 
		    if ($_SESSION["user"]=="" || $_SESSION["user"]=="undefined"){

		 ?>
   
    <?php 

			if (!isset($_POST['loginame'], $_POST['userPassword'])){
				$_SESSION['msg'] = "Please enter valid username and password";

			} else {

				// $strlogin = $_POST['fuser']; //previously taught way, but is less secure (or something)

				// if we are here, the data is valid and we can insert it into database
				$strlogin = filter_var($_POST['loginame'], FILTER_SANITIZE_STRING);
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
					<meta http-equiv="refresh" content="0;URL=index.php?msg='Login failed'" />
					<?php


				} else {
					$_SESSION["user"]="$strlogin";
					$_SESSION["mes"]="";
					mysql_close($link);

					?>
					<meta http-equiv="refresh" content="0;URL=Home.php" />
					<?php
				}

			}


		 ?>