<?php
session_start();
if($_SESSION['uname'])
{
}
else
{
	header("Location:signin.php");
}
$name=$_SESSION['uname'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_errorno().')'
			.mysqli_connect_error());
		}
else
{
$query="SELECT rollno FROM studentlogin WHERE name = '$name'";
$rollno=$conn->query($query)or die("Failed to Access db".mysqli_error());
$rollnum= mysqli_fetch_row($rollno);
$roll=$rollnum[0];
$sql="SELECT * FROM marks where rollno = '$roll'";
$result=$conn->query($sql) or die("Failed to Access database".mysqli_error());
}
?>
<html>
<head>
<title> Student Record
</title>
</head>
<style>
.table
{
background-color:#00CCFF;
}
html
{
background-color:#CCCCCC;
}
</style>
<body>
<marquee direction="right" loop="" onmouseover="this.stop()" onmouseout="this.start()" style="color:#FF0000">
<h3>
<?php echo "WELCOME " .$name."(".$roll.")" ?>
</h3>
</marquee>
<table align="center" border="1px" cellpadding="0" cellspacing="0" class="table" style="width:600px; line-height:40px;">
<tr>
<th colspan="7"><h2>Student record</h2></th> 
</tr>
<tr>
<th>ROLL NO</th>
<th>Mark1</th>
<th>Mark2</th>
<th>Mark3</th>
<th>Mark4</th>
<th>Mark5</th>
<th>Mark6</th>
</tr>
<?php
while($row = $result->fetch_assoc())
{
?>
<tr>
<td align="center"><?php echo $row['rollno'];?></td>
<td align="center"><?php echo $row['subject1'];?></td>
<td align="center"><?php echo $row['subject2'];?></td>
<td align="center"><?php echo $row['subject3'];?></td>
<td align="center"><?php echo $row['subject4'];?></td>
<td align="center"><?php echo $row['subject5'];?></td>
<td align="center"><?php echo $row['subject6'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>