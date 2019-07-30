<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$rollno=filter_input(INPUT_POST,'rollno');
$logintype=filter_input(INPUT_POST,'logintype');
if(!empty($username))
{
	if(!empty($password))
	{
	   if(!empty($rollno))
	   {
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="student";
		
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_errorno().')'
			.mysqli_connect_error());
		}
		else
		{
			if($logintype=="student"){
		$sql="INSERT INTO studentlogin(name,password,rollno) values('$username','$password','$rollno')";}
		else{
				$sql="INSERT INTO staff(name,password,rollno) values('$username','$password','$rollno')";}
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
	 }
	 else
	 {
	 echo"Rollno should not be empty.";
	 die();
	 }
	}
	else
	{
	echo "Password should not be empty";
	die();
	}
}
else
{
echo"Username should not be empty";
die();
}

?>

