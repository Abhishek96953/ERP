<?php
$name=$_REQUEST['name'];
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="select id from students where name='$name';";
$res=mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
	{
	$i=$row['id'];
	}
?>
<html>
<head>
<title>welcome</title>
<style>
	#first
	{
	margin:300px 600px;
	font-size:24px;
	}
	a
	{
	text-decoration:none;
	color:#000000;
	}
	#second
	{
	background-color:#FF0000;
	text-align:right;
	font-size:24px;
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-weight:400;
	}
</style>
</head>
<body>
<div id="second">
welcome   <?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="change password.php?name=<?php echo $name; ?>">change password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="first">
<a href="administration.php?id=<?php echo $i; ?>">ADMINISTRATION</a>
</div>
</body>
</html>
