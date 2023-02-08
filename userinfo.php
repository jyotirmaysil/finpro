<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'finprodata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (name, email, mobile, comment) 
values ('$name','$email','$mobile','$comment')";

mysqli_query($con,$query);

header("Location:index.php");
?>