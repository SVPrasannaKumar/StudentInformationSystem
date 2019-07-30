<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sql="SELECT rollno from studentlogin order by rollno";
?>
<html>
<head>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="staffstyle.css">
</head>
<style>
select,option
{
 border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
  width:100%;
  color:#fff;
  display:block;
}
</style>
<body>
<div class="subject-wrap">
  <div class="subject-html">
    <div class="subject-form">
      <form class="sign-in-htm" action="staffprocess.php" method="POST">
        <div class="group">
          <label for="user" class="label">Student Roll NO</label>
		  <?php
			 echo "<select name='rollno' required>";
			foreach($conn->query($sql)as $row)
			{
			echo"<option value=$row[rollno]>$row[rollno]</option>";
			}
			echo "</select>";
		  ?>
        </div>
        <div class="group">
          <label for="marks" class="label">Marks1</label>
          <input id="sub1" name="sub1" type="sub1" class="input" placeholder="Enter mark1" required>
        </div>
		<div class="group">
          <label for="marks" class="label">Marks2</label>
          <input id="sub2" name="sub2" type="sub2" class="input" placeholder="Enter mark2" required>
        </div>
		<div class="group">
          <label for="marks" class="label">Marks3</label>
          <input id="sub3" name="sub3" type="sub3" class="input" placeholder="Enter mark3" required>
        </div>
		<div class="group">
          <label for="marks" class="label">Marks4</label>
          <input id="sub4" name="sub4" type="sub4" class="input" placeholder="Enter mark4" required>
        </div>
		<div class="group">
          <label for="marks" class="label">Marks5</label>
          <input id="sub5" name="sub5" type="sub5" class="input" placeholder="Enter mark5" required>
        </div>
		<div class="group">
          <label for="marks" class="label">Marks6</label>
          <input id="sub6" name="sub6" type="sub6" class="input" placeholder="Enter mark6" required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Add marks" name="signin_btn">
        </div>
        <div class="hr"></div>
      </form>
	  </div>
	  </div>
	  </div>
</body>
</html>