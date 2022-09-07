<?php


session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'mobiledb');
$name = $_POST['user'];
$pass = $_POST['password'];




$s = "select * from user where name = '$name' && password ='$pass' && is_admin = 1";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username']=$name;
    header('location:adminpage.php');

} else {
    header('location:login.php?notadmin');
}

?>

<!--public function getUser($table = 'user', $name, $pass){-->
<!--$uid = $this->db->con->query("SELECT user_id FROM {$table} where name ='$name' && password ='$pass'");-->
<!---->
<!---->
<!--return $uid;-->
<!--}-->


