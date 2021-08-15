<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(https://thumbs.dreamstime.com/b/mathematics-background-fractions-black-table-close-up-dividing-fractions-math-concept-mathematics-background-fractions-black-174283442.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;">
  <nav style=" width: 100%; margin: -8px auto 0 auto; height: 8vh; background-color: #000000;  display: flex; justify-content: space-around; align-items: center;text-transform: uppercase; ">
  <a href="about.php"; style="color: #ffffff; text-decoration: none; margin-right: 20px; "> ABOUT US</a>
  <a href="register.php"; style="color: #ffffff; text-decoration: none; margin-right: 20px;"> REGISTER </a>
  <a href="login.php"; style="color: #ffffff; text-decoration: none; margin-right: 20px;"> LOGIN </a>
  <a href="mailto: math world@gmail.com" style="color: #ffffff; text-decoration: none;">CONTACT US</a>
</nav>
  <div class="header" , style="width: 20%; margin: 200px auto 0px; color: white;background:#00BFFF;text-align: center; border: 1px solid #B0C4DE; border-bottom: none; border-radius: 10px 10px 0px 0px;padding: 20px;">
  	<h2 style="color: black; background: transparent;">LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php" , style="background: transparent; text-decoration: none;">Register Here</a>

  	</p>
  </form>
</body>
</html>