<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$mark1=$_POST['sub1'];
$mark2=$_POST['sub2'];
$mark3=$_POST['sub3'];
$mark4=$_POST['sub4'];
$mark5=$_POST['sub5'];
$mark6=$_POST['sub6'];
if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_errorno().')'
			.mysqli_connect_error());
		}
else
{		
$sql="INSERT INTO marks(rollno,subject1,subject2,subject3,subject4,subject5,subject6) values('$rollno','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6')";
if($conn->query($sql))
		{
			echo "INSERTED SUCCESFULLY";
		}
		else
		{
		echo "Error.".$sql."<br>".$conn->error;
		}
		$conn->close();
}
?>