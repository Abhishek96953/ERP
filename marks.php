<html>
<head>
<style type="text/css">
table
{
margin:250px 600px;
font-size:24px;
}
div
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
button{
	margin:3px 600px;
}
</style>
<title>Untitled Document</title>
	</head>
	<body>
	<div>
	<?php
	$i=$_REQUEST['id'];
	
	$host="localhost";
	$user="root";
	$pwd="";
	$dbname="jecrc";
	$con=mysqli_connect($host, $user, $pwd,$dbname) or die('Connection Failed');
	$query="select * from students where id=$i";
	$name=$mn=$fn=$a=$p=$b=$cn=$id='';
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res))
	{ 
		$name=$row['name'];
	}
	?>
	<?php  echo $name;?>&nbsp;&nbsp;&nbsp;
	<a href="change password.php?name=<?php echo $name; ?>">change password</a>&nbsp;&nbsp;&nbsp;
	<a href="erp.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	<form method="post" action="marks1.php?id=<?php echo $i;?>">
	<table>
		<tr>
			<td>Select Year:</td>
			<td>
				<select style="width:200px;" name="year">
					<option value="">--SELECT year--</option>
						<?php
					    $con=mysqli_connect("localhost","root","","jecrc") or die('Connection Failed');
				     	$query1="SELECT year FROM firstyear WHERE id=$i";
						echo $query;
						$res=mysqli_query($con, $query1);
						while($row=mysqli_fetch_array($res))
						{
								$y=$row['year'];
						?>		
						<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
						<?php
						}
						?>	
				</select>
			</td>
		</tr>
		</table>
		
		<button type="submit">GET MARKS</button>
		</form>
</body>
</html>