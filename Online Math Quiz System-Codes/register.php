<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body style="background: url(https://thumbs.dreamstime.com/b/mathematics-background-fractions-black-table-close-up-dividing-fractions-math-concept-mathematics-background-fractions-black-174283442.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;">

  <div class="header" , style="width: 20%; margin: 90px auto 0px; color: white;background: #00BFFF;text-align: center; border: 1px solid #B0C4DE; border-bottom: none; border-radius: 10px 10px 0px 0px;padding: 20px">
    <h2 style="color: black; background: #00BFFF; ">REGISTER</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group"  >
      <label>Username</label>
      <input type="text" name="username"  value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email"  value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password"  name="password_1">
    </div>
    
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>

    

    
    <p>
      Already a member? <a href="login.php"; style="background: transparent; text-decoration: none;">Login</a>
    </p>
  </form>
</body>
</html>