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
      <form  id="registerForm" method="post" action="login.php">
       <h3>LOG IN</h3>
        <div class="formElements">
          <label>Email: </label>
          <input type="email" name="email" id="email"  placeholder="Your Email: " required>
          <label>Password: </label>
          <input type="password" name="password" id="password" required>
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
