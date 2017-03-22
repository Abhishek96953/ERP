<?php
	//Database Variables
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="jecrc";
	$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
	$name="";
	if(isset($_POST['register']))
	{
		//To Read Values from Form
		$name=$_POST['name'];
		$password=$_POST['password'];
		
		$query="select name,id from students where name='$name' and password='$password'"; 
		$res=mysqli_query($con, $query);
		while($row=mysqli_fetch_array($res))
		{			$nam=$row['name'];
					$i=$row['id'];
		}
		if($nam)
			header("location:welcome.php?name=$nam");
		else
			echo "<script>alert('invalid name and password');</script>";
	}

?>
<html>
<head>
<style type="text/css">
	div {
		text-align:center;
	}
	body
	{
	background-image:url(ju.jpg);
	background-size:cover;
	color:#FFFFFF;
	}
</style>
<title>erp</title>
</head>
<body>
<form method="post">
<h1 style="background-color:#FF0000" align="center" ><marquee>WELCOME TO JECRC UNIVERSITY</marquee></h1>
<div>
<img src="logo.jpg">
<h2>LOGIN PAGE:</h2>
ENTER YOUR NAME:&nbsp;
<input type="text" placeholder="your name" name="name"/><br><br>
ENTER YOUR PASSWORD:&nbsp;
<input type="password" placeholder="your password" name="password"/><br><br>
<input type="submit" value="register" name="register" />
<input type="reset" value="cancel"/>&nbsp;
</form>
</div>
</body>
</html>