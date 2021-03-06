<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Job Application</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="phone" name="phone" value="<?php echo $phone; ?>">
  	</div>
	<div class="input-group">
  	  <label>University Name</label>
  	  <input type="uname" name="uname" value="<?php echo $uname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Enter Graduation Year</label>
  	  <input type="gyear" name="gyear" value="<?php echo $gyear; ?>">
  	</div>
	<div class="input-group">
  	  <label>Enter Job role applying for</label>
  	  <input type="jrole" name="jrole" value="<?php echo $jrole; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit Application</button>
  	</div>
		<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  	
  </form>
</body>
</html>