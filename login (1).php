<?php

$con=mysql_connect('localhost','root');


mysql_select_db('sis',$con);



$userid=$_POST['userid'];
$password=$_POST['pass'];


$query="select * from registartion where userid='$userid' and password='$password' ";
$result=mysql_query($query);
$num=mysql_num_rows($result);

if($num!=0)
{
	echo "Login Successfull";
}	
else
	echo "Login failed";

mysql_close($con);
	
?>

<html>

	<body>
		<br>
		<a href="registration.html">New User</a>
		<br>
		<a href="Login.html">Login</a>
		
	
	</body>


</html>