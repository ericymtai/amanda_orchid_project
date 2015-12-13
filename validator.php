<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

    <?php 
      include "connectdb.php" 
    ?>



<?php
if ( isset( $_POST['submit'] ) ) {  // if form successfully submitted  
    function validator($data) { // security function
        if ( isset($data)){ // confirm there is data
            $data = trim($data); // strip spaces
            $data = stripslashes($data); // strip slashes
            $data = htmlspecialchars($data); // convert any html special chars into standard text
            $data = filter_var($data, FILTER_SANITIZE_STRING); // filter the string
            return $data; // return the entered data
        } else {
            exit(); // end php
        } // end else
    } // end function
    $username  = validator($_POST['loginame']); // username
    $password  = validator($_POST['userPassword']); // password
    $error; // hold errors for later
    require_once('connect.php'); // allow database access
    $results = mysql_query( // check if user exists
            "
            SELECT * FROM aosuser WHERE userName = '$username'
            "
    ) or die (mysql_error()); // if failed present an error
    $userRecords =  mysql_fetch_row($results); // fetch row data for the user
    if ($username == $userRecords[3] && $password == $userRecords[4]) { // if entered data matches records
        $_SESSION['loggedIn'] = $username; // allow secure access
        $_SESSION['name'] = $username; // name session after username
        header("Location: store.php"); // login user
        mysql_close ($link); // close database for security
        exit(); // end php
    } else { // incorrectly entered username and/or passwird
        $error = "User and/or Password Incorrect"; // error
    } // end security check else
} // end on submit
?>

  