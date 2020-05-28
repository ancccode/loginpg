<?php 
require("root.php");


$username = $_POST['username'];
$username = mysqli_real_escape_string($con, $username);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

if($_POST['type'] == "user"){
    $query = "SELECT id, username FROM user WHERE username ='$username' AND password = '$password'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    if($num == 0){
        $error = "<span class='red'>Please enter correct username and password</span>";
        header('location: login.php?error='.$error);
    }
    else{
        
        header('location: welcome.php');
    }
}
else{
    $query = "SELECT id, username FROM admin WHERE username ='$username' AND password = '$password'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    if($num == 0){
        $error = "<span class='red'>Please enter correct username and password</span>";
        header('location: login.php?error='. $error);
    }
    else{
        
        header('location: awelcome.php');
    }
}




?>