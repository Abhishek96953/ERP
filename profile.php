<?php
$i=$_REQUEST['id'];
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="select name, mothersname,fathersname,address,phone,course,branch,id from students where id='$i'";
$res=mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
	{ 
	$name=$row['name'];
	$mn=$row['mothersname'];
	$fn=$row['fathersname'];
	$a=$row['address'];
	$p=$row['phone'];
	$cn=$row['course'];
	$b=$row['branch'];
	}
	?>
	<h1 align="center"><?php echo("$name");?></h1>
NAME:     -<?php echo("$name");?><br><br>
MOTHERS NAME:  -<?php
echo("$mn");?><br><br>
FATHERS NAME:    -&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo("$fn");?><br><br>
ADDRESS:     -<?php echo("$a");?><br><br>
PHONE NUMBER:    -<?php echo("$p");?><br><br>
COURSE:     -&nbsp;&nbsp;&nbsp;&nbsp;<?php
echo("$cn");?><br><br>
BRANCH:    -&nbsp;&nbsp;&nbsp;&nbsp;<?php
echo("$b");?><br><br>
<?php
?>	
<html>
<head>
<title>info</title>
<style>
body
{
font-family: Geneva, Arial, Helvetica, sans-serif;
font-size:24px;
border:3px solid #000000;
}
input
{
text-align:center;
}
div
{
text-align:center;
font-size:32px;
color:#000000;
}
</style>
</head>
<body>
<div>
<a href="edit.php?id=<?php echo $i; ?>" style="text-decoration:none
">edit</a>
</div>
</body>
</html>
