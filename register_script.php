<?php
require("root.php");
$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$username = $_POST['username'];
$username = mysqli_real_escape_string($con, $username);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

if($_POST['type'] == "user"){
    $query = "INSERT INTO user(name, username, password)VALUES('" .$name."','".$username."','".$password."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $id; 
    header('location: welcome.php');
}
else{
    $query = "INSERT INTO admin(name, username, password)VALUES('" .$name."','".$username."','".$password."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $id;
    header('location: awelcome.php');
}


?>