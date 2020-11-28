<?php // I wanna connect to the database here
$conn = mysqli_connect("localhost", "root", "", "aviano-db");

// this is to check the connection
if(!$conn){
    header("Location: error.php");
    exit;
}
?>