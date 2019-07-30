<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Information System</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="signin.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input"  placeholder="Enter Username" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Enter Password" required>
        </div>
		<div class="group">
			<label for="logintype" class="label">Login type</label>
			<select name="logintype" id="logintype" class="input" required>
			  <option value="student" style="background-color:#0000FF">Student</option>
			  <option value="staff" style="background-color:#0000FF">Staff</option>
			  </select>
		</div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In" name="signin_btn">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>        </div>
      </form>
      <form class="sign-up-htm" action="signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input"  placeholder="Enter Username" required>
        </div>
		<div class="group">
          <label for="rollno" class="label">ROLL NO</label>
          <input id="rollno" name="rollno" type="text" class="input"  placeholder="Enter Rollnumber" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password"  placeholder="Enter Password" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password" placeholder="Enter Password" required>
        </div>
		<div class="group">
			<label for="logintype" class="label">Login type</label>
			<select name="logintype" id="logintype" class="input" required>
			  <option value="student" style="background-color:#0000FF">Student</option>
			  <option value="staff" style="background-color:#0000FF">Staff</option>
			  </select>
		</div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
