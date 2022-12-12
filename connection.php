<?php



 $con = mysqli_connect("localhost", "root", "","dbname");

 $con -> set_charset("utf8");
 session_start(); 

 

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
