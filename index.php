<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>AMANDA'S ORCHID HOME</title>
    <link rel="stylesheet" href="css/newstyle.css" >
  </head>
  <body>
    <header>
      <div id="logo">
        <img src="images/logo_outline.svg" alt="logo"/>
      </div>
      <nav>
        <ul>
          <li><a href="index.php" class="active">HOME</a></li>
          <li><a href="login.php">LOG IN</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>      
    </header>
    
    <main>
      <form  id="registerForm" method="post" action="login.php">
        <h3>REGISTER</h3>
        <div class="formElements">
          <label>First Name: </label>
          <input type="text" name="firstName" id="fistName"  placeholder="Your First Name: " autofocus required>
          <label>Last Name: </label>
          <input type="text" name="lastName" id="lastName"  placeholder="Your Last Name: " required>
          <label>User Name: </label>
          <input type="text" name="userName" id="userName"" placeholder="Your User Name: " required>
          <label>Email: </label>
          <input type="email" name="email" id="email"  placeholder="Your Email: " required>
          <label>Password: </label>
          <input type="password" name="password" id="password" required>
          <label>Confirm Password: </label>
          <input type="password" name="confirmPassword" id="confirmPassword" required>
            <br>
            <br>
            <input type="submit">
            <input type="reset">
         </div>   <!-- end .formElements -->
        
      </form>
    </main>
     <footer>
        <ul>
          <li><a href="index.php" class="active2">HOME</a></li>
          <li><a href="login.php">LOG IN</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>    
    </footer>
    <?php
    // put your code here
    ?>
  </body>
</html>
