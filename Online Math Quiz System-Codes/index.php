<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  $db2 = mysqli_connect('localhost', 'root', '', 'quizdbase');
  
  

?>
<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
  <br><h2 style="text-align: center; color: #0000cd ;"> </h2>
  <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
</div>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="container" >

       <h3 style="text-align: center ; color: green ; position: center ; margin-bottom : 7px;"><strong style="color: #ffd700"><?php echo $_SESSION['username']; ?> </strong>,<strong> Welcome To Math Quiz</strong></h3>
<div class="col-lg-8 m-auto d-block">
        <div class="card">

          <h6 class="text-center card-header", style="color: white ; background: #000000" > Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4 options. Best of Luck :)</h6>
        </div><br>

        <form action="check.php" method="post">
        <?php

        for($i=1 ; $i<6 ; $i++){
        $q = " select * from questions where qid = $i";
        $query = mysqli_query($db2, $q);

        while ($rows = mysqli_fetch_assoc($query) ) {
          ?>

          <div class="card " , style="margin: 2px auto">
            <p class="card-header"><strong><?php echo $rows['question'] ?></strong></p>
            
            <?php
                 $q = " select * from answers where ans_id = $i";
                 $query = mysqli_query($db2, $q);

                 while ($rows = mysqli_fetch_assoc($query) ) {
                    ?>

                    <div class="card-body">
                      <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'] ; ?>",required;>
                      <?php echo $rows['answer'];  ?>
                    </div>  

      <?php 
          }
          }    
        }
        

          ?>
           <br><input type="submit" name="submit" value="SUBMIT" class="btn btn-success m-auto d-block" ><br>

          
</form>
          
</div>

</div>
<div>
  <h6 style="text-align: center;"> ©2017 Math World </h6>
</div>

       <?php endif ?>

</div>
		
</body>
</html>