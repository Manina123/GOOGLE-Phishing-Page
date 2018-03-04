<?php
$con = mysqli_connect('localhost','id4100459_user','h5a5c5k5','id4100459_users');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "insert into id4100459_users.user(email,password) VALUES ('$email','$password');";
$queryone = "select * from user where password = $password";
$queryone_result = mysqli_query($con, $queryone);
$row = mysqli_num_rows($queryone_result);
if ($row >= 1){
    header ('location:roman.html');
} else {
 header ('location:back.php');   
}
?>