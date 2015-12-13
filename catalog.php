<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>validation</title>
</head>
<body>

          <li><a href="logout.php" class="active">LOG OUT</a></li>
    
    <!-- // connect and open the db -->
    <?php 
        include "connectdb.php" 
    ?>
    
    <!-- // Retrieve the information    -->
    <?php
        
        $result = mysql_query("SELECT * FROM aosproduct") or die("Retrieving info failed: ".mysql_error());
        $num_rows = mysql_num_rows($result);
        ?>
                                         
        <h2>List of products</h2>
        <table border="2">
            <tr>category name</tr>
            <td>description</td>
            <td>image</td>
            </tr>
            
             <?php 
            if ($num_rows = 0) {
                echo "No products come back soon!!!";
            } else {
                while($row = mysql_fetch_array($result)) {
                    echo '<tr><td> '.$row['item'].'</td><td>'.$row['price'].'</td><td><img src="images/'.$row['image'].' "/></td><td>'.$row['price'].'</td></tr>';
                }
            }
    
             mysql_close($link);
    ?>
        </table>
                                         

    
</body>
</html>