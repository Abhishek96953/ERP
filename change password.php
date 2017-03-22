<?php
	$name=$_REQUEST['name'];
	//Database Variables
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="jecrc";
	$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
	if(isset($_POST['submit']))
	{	
	$name=$_REQUEST['name'];
	$password=$_POST['pd'];
		$query="update students set  password='$password' where name='$name';";
		$res=mysqli_query($con, $query);
		if($res)
			echo "<script>alert('password changed');</script>";
		else
			echo "<script>alert('password doesn't match');</script>";
		}
?>
<html>
<head>
<style>
body
{
border:3px solid #000000;
}
div
{
margin:200px 500px;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:20px;
}
a
{
text-decoration:none;
}
</style>
<title></title>
</head>
<body>
<h1 align="center">JECRC UNIVERSITY PASSWORD CHANGE:</h1>
<form action="change password.php?name=<?php echo $name;?>" method="post">
<div>
ENTER CURRENT PASSWORD:&nbsp;
<input type="password" name="pwd"/><br><br>
ENETR NEW PASSWORD:&nbsp;
<input type="password" name="pd"/><br><br>
<input type="submit" name="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="cancel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="welcome.php?name=<?php echo $name;?>">BACK</a>
</div>
</form>
</body>
</html>
