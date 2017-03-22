<?php
$i=$_REQUEST['id'];
$host="localhost";
$user="root";
$pwd="";
$dbname="jecrc";
$con=mysqli_connect($host, $user, $pwd, $dbname) or die('Connection Failed');
$query="select name,coursename,branch,yearintake,yearofpassing from course where id='$i'";
$res=mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
	{
$name=$row['name'];
$c=$row['coursename'];
$b=$row['branch'];
$y=$row['yearintake'];
$yr=$row['yearofpassing'];
	}
	?>
	<h1 style="background-color:#FF0000" align="center" ><marquee>WELCOME TO JECRC UNIVERSITY</marquee></h1>
NAME:     -<?php echo("$name");?><br><br>
COURSE:  -<?php
echo("$c");?><br><br>
BRANCH:    -&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo("$b");?><br><br>
YEAR INTAKE:     -&nbsp;&nbsp;&nbsp;&nbsp;<?php
echo("$y");?><br><br>
YEAR OF PASSING:    -&nbsp;&nbsp;&nbsp;&nbsp;<?php
echo("$yr");?><br><br><br><br><br><br><br>
<html>	
		<head>
			<style>
			body
			{
			font-family: Geneva, Arial, Helvetica, sans-serif;
			font-size:24px;
			border:3px solid #000000;
			text-align:center;
			}
			div
			{
			text-align:center;
			font-size:32px;
			color:#000000;
			}
			</style>
					<title>Untitled Document</title>
			</head>
			
<body>
<div>
<a href="update.php?id=<?php echo $i; ?>" style="text-decoration:none
">edit</a>
</div>
</body>
</html>
