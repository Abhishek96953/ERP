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
	$query="select * from students where id='$i'";
	$name=$mn=$fn=$a=$p=$b=$cn=$id="";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res))
	{ 
		$name=$row['name'];
		$mn=$row['mothersname'];
		$fn=$row['fathersname'];
		$a=$row['address'];
		$p=$row['phone'];
		$cn=$row['course'];
		$b=$row['branch'];
		$id=$row['id'];
	}
	if(isset($_POST['submit']))
	{	$name=$_POST['name'];
		$mn=$_POST['mname'];
		$fn=$_POST['fname'];
		$a=$_POST['a'];
		$p=$_POST['phone'];
		$cn=$_POST['course'];
		$b=$_POST['branch'];
		
		$query1="update students set name='$name',fathersname='$fn',mothersname='$mn',address='$a',phone='$p',course='$cn',branch='$b' where id='$id';";
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
<form action="edit.php?id=<?php echo $i;?>" method="post">
NAME:
<input type="text" name="name" value="<?php echo $name ?>"/><br><br>
FATHERS NAME:
<input type="text" name="fname" value="<?php echo $fn ?>"/><br><br>
MOTHERS NAME:
<input type="text" name="mname" value="<?php echo $mn ?>"/><br><br>
ADDRESS:
<input type="text" name="a" value="<?php echo $a ?>"/><br><br>
PHONE NUMBER:
<input type="text" name="phone" value="<?php echo $p ?>"/><br><br>
COURSE:
<input type="text" name="course" value="<?php echo $cn ?>"/><br><br>
BRANCH:
<input type="text" name="branch" value="<?php echo $b ?>"/><br><br>
ID:
<input type="text" name="id" value="<?php echo $id ?>"/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>