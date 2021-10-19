<?php
include("class/user.php");
extract($_POST);
$email=$_SESSION['email'];
$profile=new users;
$profile->user_profile($email);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body style="background-image:url(image/bg11.jpg)">

<div class="card">
       <div class="card-body heading">Online Quiz System</div>
</div>
<br><br><br>
<div class="container">
   <!-- Tab panes -->
              <ul class="nav nav-tabs nav1 " role="tablist" >
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Profile</a>
                </li>
                <li class="nav-item ml-auto" > 
                  <a class="nav-link "  href="logout.php" >logout</a>
                </li>
              </ul>
  
 
  <div class="tab-content">
  
         <div id="home" class="container tab-pane active"><br>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">

              <center><button type="button" class="btn btn-primary btn1" data-toggle="tab" href="#select">Start Quiz</button></center>
            <div id="select" class="container tab-pane fade"><br>
              <form action="question.php" method=post>
              <select class="form-control" id="" name="cat" >
              <option disabled="disabled">Select Category</option>
               <?php
                 $profile->cat_show();
                  foreach($profile->cat as $category)
                  {?>
                
                    <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                    
                    <?php

                    }?>
                     </select><br>
    <center><input type="submit" value="submit"class="btn btn-primary"></center>
    </form>
    
  </div>
                  </div>
                  <div class="col-sm-3"></div>
    </div>
</div>
    <div id="menu1" class="container tab-pane fade"><br>
      
     
          <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Image</th>
            </tr>
            <tbody>
            <?php 
	              foreach($profile->data as $prof)
	              {?>
               <tr>
                  <td><?php echo $prof['ID'];?></td>
                  <td><?php echo $prof['uname'];?></td>
                  <td><?php echo $prof['email'];?></td>
                  <td><?php echo $prof['mob_no'];?></td>
                  <!-- <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td> -->
              </tr>
            </tbody>
            	<?php 	}?>
          </table>




    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
<!-- </div>
<div class="col-sm-3"></div> -->
</div>

</body>

</html>
