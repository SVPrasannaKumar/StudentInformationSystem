<?php
session_start();
if($_SESSION['uname'])
{
	header("Location:studentpage.php");
}
?>
<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$username=$_POST['username'];
$password=$_POST['password'];
$logintype=$_POST['logintype'];
if($logintype=="student"){
$sql = "SELECT * FROM studentlogin WHERE name = '$username' AND password = '$password' ";}
else{
$sql = "SELECT * FROM staff WHERE name = '$username' AND password = '$password' ";}
$result=$conn->query($sql) or die("Failed to Access database".mysqli_error());
$numrows = mysqli_fetch_array($result);
if($numrows['name']==$username && $numrows['password']==$password)
   {
	if($logintype=="student"){
	echo "Welcome ".$numrows['name'];
	$uname=$numrows['name'];
	$_SESSION['uname']=$uname;
	header("Location:studentpage.php");
	}
	else
	{
		echo "Welcome ".$numrows['name'];
	  header("Location:staffpage.php");
	}
   }
else
   {
   	$message = "Enter valid Credentials";
    echo '<script type="text/javascript">alert("Enter valid Credentials...");</script>';
	header("Location:index.php");
   }

?>