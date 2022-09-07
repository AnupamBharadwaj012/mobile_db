<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'mobiledb');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from user where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1 ){
    echo "Username already taken";
    header('location:login.php?status1');

}else{
    $reg = "insert into user (name,email,password) values('$name','$email','$pass')";

    mysqli_query($con,$reg);
    header('location:login.php?status3');
}

?>
