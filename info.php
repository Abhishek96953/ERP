<?php
	$name=$_REQUEST['name'];
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="jecrc";
	$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');	
	$name=$_POST['name'];
	$query="select name,fathersname,mothersname,address,phone,course,branch from students where name='$name'";
	$res=mysqli_query($con, $query);
	while($row=mysqli_fetch_array($res))
	{ 
	}	 
?>
<html>
<head>
<title>info</title>
</head>
<body>
<form action="info.php" method="post">
</form>
</body>
</html>
