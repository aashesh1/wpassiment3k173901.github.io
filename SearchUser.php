<?php
$link = mysqli_connect("localhost", "root", "", "wpassignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = 'JMS';
// $search = $_POST['getusername'];
 $sql = "SELECT Username FROM user where Username = 'JMS";
 $result = $link->query($sql);
 echo '<script>alert("Founded data is: ")</script>';

// close connection
mysqli_close($link);
?>