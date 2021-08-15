<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
    
  }
  
  $db2 = mysqli_connect('localhost', 'root', '', 'quizdbase');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.blinking{
  animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
  0%{ color: blue }
  49%{ color: #C71585 }
  60%{ color: #DC143C }
  99%{ color: #fada5e }
  100%{ color: green }
}
</style>
<body>
  <div class="container text-center">
    <br><br>
    <h2 class="text-center blinking "> Math Quiz </h2>
    <br><br><br><br>
<div class="col-lg-8 m-auto d-block">
  <table class="table text-center table-bordered table-hover">
    <tr>
      <th colspan="2" class="bg-dark"><h1 class="text-white"> Results </h1></th>
    </tr>
    <tr>
         <td>
           Questions Attempted
         </td>
         <?php
         if(isset($_POST['submit'])){

        if(!empty($_POST['quizcheck'])){

        $count = count($_POST['quizcheck']); 
      }
    }
         ?>
         <td>
           <?php
           echo " Out of 5, you have selected ".$count. "options" ;
           ?>

         </td>

        
      

      <?php
      $result = 0;
      $counter = 0;
      $i = 1;
      $selected = $_POST['quizcheck'];
     

      $q = " select * from questions";
      $query = mysqli_query($db2, $q);

      while( $rows = mysqli_fetch_array($query)){
       
        $checked = $rows['ans_id'] == $selected[$i];
        if($checked){
          

          $result++;
          

         

      }
      $i++;
    }
      ?>

    <tr>
      <td>
        Your Total Score
      </td>
      <td colspan="2">
    <?php
    echo "<br> your total score is".$result;
        
    ?>
      </td>
    </tr>

    <?php
    $name = $_SESSION['username'];
    $finalresult = "insert into loginuser(username,totalques,answerscorrect) values ('$name','5','$result') ";
    $queryresult=mysqli_query($db2,$finalresult);
    //if(queryresult){
    // echo "successsss";
  //}
    ?>
</tr>

</table>
       <br><a href="answers.php"; style="background: transparent; text-decoration: none;">Click Here for Quiz Answers</a>
</div>
       <br><a href="index.php?logout='1'", class="btn ", style="font-size: 15px; color: white; background: #0F52BA; border: none;
  border-radius: 5px;" >LOGOUT</a><br>

</div>
</body>
</html>