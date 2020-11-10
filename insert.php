<?php
$link = mysqli_connect("localhost", "root", "", "wpassignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = randomPassword();
$_REQUEST['rpassword'] = randomPassword();
$url = mysqli_real_escape_string($link, $_REQUEST['url']);
// attempt insert query execution
$sql = "INSERT INTO user (Title, Username, Password , URL) VALUES ('$title', '$username', '$password','$url')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>