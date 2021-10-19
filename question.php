<?php
include("class/user.php");
extract($_POST);
$qus=new users;
$cat= $_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Questions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style1.css" type="text/css">
  <style>
    nav{
      background-color:darkgray;
    }
    .h2{
      color:white;
      
    }

    
  </style>
</head>
<body style="background-image:url(image/bg11.jpg)">

      <!-- <div class="card">
        <div class="card-body heading">Online Quiz System</div>
      </div> -->
      <div>
      <nav class="navbar navbar-expand-sm  navbar-dark fixed-top justify-content-center">
        <h2 class="h2">Onlize Quiz System</h2>
      </nav>
      </div>
   <br><br><br>
<div class="container">
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
 
  <form action="answer.php" method="post">
  <?php
  $i=1; 
  foreach($qus->qus as $qust) {?>
 
   
  <table class="table  table-bordered ">
    <thead class="k">
      <tr>
    <th><?php echo $i;?>.&nbsp&nbsp<?php echo $qust['question'];?> </th>
    </tr>
    </thead>
    <tbody class="k1">
      <?php if(isset($qust['ans1'])){?>
      <tr>
        <td><input type="radio" value="0" name="<?php echo $qust['id'];?>">&nbsp&nbsp<?php echo $qust['ans1'];?></td>
        </tr>
        <?php } ?>
        <?php if(isset($qust['ans2'])){?>
        <tr>
        <td><input type="radio" value="1" name="<?php echo $qust['id'];?>">&nbsp&nbsp<?php echo $qust['ans2'];?></td>
        </tr>
        <?php } ?>
        <?php if(isset($qust['ans3'])){?>
        <tr>
        <td><input type="radio" value="2" name="<?php echo $qust['id'];?>">&nbsp&nbsp<?php echo $qust['ans3'];?></td>
        </tr>
        <?php } ?>
        <?php if(isset($qust['ans4'])){?>
        <tr>
        <td><input type="radio" value="3" name="<?php echo $qust['id'];?>">&nbsp&nbsp<?php echo $qust['ans4'];?></td>
        </tr>
        <?php } ?>
        <tr>
        <td><input type="radio" value="no_attempt" checked="checked" style="display:none"  name="<?php echo $qust['ans'];?>"></td>
        </tr>
      
    </tbody>
  </table>
  
  
  <?php $i++; }?>
 <center><input type="submit" value="submit quiz" class="btn btn-success btn1"></center>
  </form>
        </div>
        <div class="col-sm-2"></div>
        </div>
</div>

</body>
</html>
