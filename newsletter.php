<?php
if(isset($_POST['submit'])){
    $connect =mysqli_connect("localhost","root","","mobiledb");
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $sql = "INSERT INTO newsletter (name,registered_email) VALUES ('$name','$email')";
    $res= mysqli_query($connect,$sql);
    if(!$res){
        die('could not register ' . mysqli_error());
    }else{
        header('Location:index.php?subscribed');

    }
}