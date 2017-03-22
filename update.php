<html>
<head>
<style type="text/css">
div
{
text-align:center;
}
a
{
text-decoration:none;
text-align:center;
font-size:24px;
}
</style>
<title></title>
</head>
<body>
<?php
	$i=$_REQUEST['id'];
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="jecrc";
	$con=mysqli_connect($host, $user, $pwd,$dbname) or die('Connection Failed');
	$query="select * from course where id='$i'";
	$name=$mn=$fn=$a=$p=$b=$cn=$id="";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res))
	{ 
		$name=$row['name'];
		$c=$row['coursename'];
		$b=$row['branch'];
		$y=$row['yearintake'];
		$yr=$row['yearofpassing'];
	}
	if(isset($_POST['submit']))
	{	$name=$_POST['name'];
		$c=$_POST['course'];
		$b=$_POST['branch'];
		$y=$_POST['year'];
		$yr=$_POST['yop'];
		$query1="update course set name='$name',coursename='$c',branch='$b',yearintake='$y',yearofpassing='$yr' where id='$i';";
		if(!mysqli_query($con,$query1))
			die('Error: '.mysql_error());
		echo "<script>alert('changes');</script>";
	}
?>
<h1 style="background-color:#FF0000" align="center" ><marquee>WELCOME TO JECRC UNIVERSITY</marquee></h1>
<a href="welcome.php?name=<?php echo $name; ?>">HOME</a>&nbsp;&nbsp;&nbsp;<br><br>
<div>
<img src="logo.jpg">
</div>
<form action="update.php?id=<?php echo $i;?>" method="post">
NAME:
<input type="text" name="name" value="<?php echo $name ?>"/><br><br>
COURSE:
<input type="text" name="course" value="<?php echo $c ?>"/><br><br>
BRANCH:
<input type="text" name="branch" value="<?php echo $b ?>"/><br><br>
YEAR INTAKE:
<input type="text" name="year" value="<?php echo $y ?>"/><br><br>
YEAR OF PASSING:
<input type="text" name="yop" value="<?php echo $yr ?>"/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>