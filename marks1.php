<?php
$i=$_REQUEST['id'];
$y=$_POST['year'];
if($y=="")
{
echo "<script>alert('year cannt be blank');</script>";
}
else{
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";		
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="SELECT id FROM firstyear where id=$i";
$res=mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
$i=$row['id'];
}
?>
<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd,$dbname) or die('Connection Failed');
$query="select * from students where id='$i'";
$name=$mn=$fn=$a=$p=$b=$cn=$id="";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{ 
	$name=$row['name'];
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#second
{
text-align:right;
background-color:#FF0000;
font-size:24px;
}
a
{
text-decoration:none;
color:#000000;
}
#first{
	text-align:center;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<div id="second">
<?php  echo $name;?>&nbsp;&nbsp;&nbsp;
<a href="change password.php?name=<?php echo $name; ?>">change password</a>&nbsp;&nbsp;&nbsp;
<a href="index.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div><br><br>
<div id="first">
<img src="logo.jpg">
</div>
<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="SELECT em,flat FROM firstyear where id=$i";
$res=mysqli_query($con,$query);
$f=$e="";
while($row=mysqli_fetch_array($res))
{
$f=$row['flat'];
$e=$row['em'];
}
?>
<br><br><br><br><br><br><br><br>
ENGINEERING MECHANICS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $f; ?><br><br>
FORMAL LANGUAGE AND AUTOMATION THEORY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $e;?><br><br>
<?php
}
?>
</body>
</html>