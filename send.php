<?php
$con = mysqli_connect('localhost','username','password','database');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "insert into database.tablename(email,password) VALUES ('$email','$password');";
$queryone = "select * from tablename where password = $password";
$queryone_result = mysqli_query($con, $queryone);
$row = mysqli_num_rows($queryone_result);
if ($row >= 1){
    header ('location:Redirect.html');
} else {
 header ('location:Retry.php');   
}
?>
