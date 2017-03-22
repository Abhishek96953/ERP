<?php
$i=$_REQUEST['id'];
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="select name from course where id='$i'";
$res=mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
	{
	$name=$row['name'];
	}
?>
<html>
<head>
<style type="text/css">
body
{
background-image:
url(IMG_20151227_161653173_HDR.jpg);
}
a
{
text-decoration:none;
color:#000000;
}
div
{
text-align:right;
background-color:#FF0000;
font-size:18px;
}
h4
{
outline-color:#666666;
}
</style>
<title>Untitled Document</title>
</head>
<body>
<form action="Administration.php>">
<div>
WElCOME<?php  echo $name;?>&nbsp;&nbsp;&nbsp;
<a href="welcome.php?name=<?php echo $name; ?>">HOME</a>&nbsp;&nbsp;&nbsp;
<a href="change password.php?name=<?php echo $name; ?>">change password</a>&nbsp;&nbsp;&nbsp;
<a href="index.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<img src="logo.jpg">
<h4 style="color:#FF0000">MY ACCOUNT</h4>
<h4>personal information:</h4>
<a href="profile.php?id=<?php  echo $i;?>">profile</a>
<h4>couse information:</h4>
<a href="course.php?id=<?php  echo $i;?>">course details</a>
<h4>attendance:</h4>
<a href="attendance.php?id=<?php  echo $i;?>">attenadance</a>
<h4>view marks:</h4>
<a href="marks.php?id=<?php  echo $i;?>">marks</a>
</form>
</body>
</html>