<?php
include("class/user.php");
$ans=new users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>answer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style1.css" type="text/css">
<style>
  .h2{
    color:white;
  }
  button
  {
    background-color:teal;
    width:50%
   
    
  }
</style>
</head>
<body style="background-image:url(image/bg11.jpg)">
    <center>
         
    <?php 
    $total=$answer['right']+$answer['wrong']+$answer['no_attempt'];
    $attempt_qus=$answer['right']+$answer['wrong'];
    ?>
    <div class="container"><br>
  <h2 class="h2">Quiz Result</h2><br>         
  <table class="table table-bordered">
    <thead class="k">
      <tr>
        <th>Total No. of question</th>
        <th><?php echo $total; ?></th>
     
      </tr>
    </thead>
    <tbody class="k1">
      <tr>
        <td>Attempt question</td>
        <td><?php echo $attempt_qus; ?></td>
        
      </tr>
      <tr>
        <td>Right Question</td>
        <td><?php echo $answer['right']; ?></td>
        
      </tr>
      <tr>
        <td>Wrong Question</td>
        <td><?php echo $answer['wrong']; ?></td>  
      </tr>
      <tr>
        <td>Not Attempt Question</td>
        <td><?php echo $answer['no_attempt']; ?></td>  
      </tr>
      <tr>
        <td>Total Mark</td>
        <td><?php echo 2*$total; ?></td>  
      </tr>
      <td>Recived Mark</td>
        <td><?php echo 2*$answer['right']; ?></td>  
      </tr>
      <td>Total Percentage</td>
        <td><?php echo ($answer['right']*100)/$total; ?>&nbsp%</td>  
      </tr>
    </tbody>
  </table>
 <button><a href="logout.php">Logout</a></button>
</div>




</center>
</body>
</html>
