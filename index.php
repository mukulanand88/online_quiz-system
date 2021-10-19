<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  
</head>

<body style="background-image:url(image/bg11.jpg)">




<div class="container">
    <div class="row">
    <div class="col-sm-12"> <br>
       <div class="card text-white fixed c">
            <div class="card-body heading"><strong>ONLINE QUIZ SYSTEM</strong></div>
            </div>
                
     </div>
</div>
 <br>
<div class="container ">
       <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header c1">LOG IN</div>
                    <?php
                              if(isset($_GET['run'])&& $_GET['run']=="failed")
                              {
                                echo "Your email or password not matched!)";
                              }
                          ?> 
                         <div class="card-body ">
                         <form action="signin.php" method="post">
                               <div class="form-group">
                                    <label for="email">Email:</label>
                                      <input type="email" class="form-control" name="e" id="email" placeholder="Enter yuor email" name="email" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter your password" name="pswd" required>
                                  </div>
    
                                       <button type="submit" class="btn btn-primary">LOGIN</button>
                                       <hr>
                                       <a href="#">forget your password</a>
                            </form>



                        </div> 
                   </div>
          </div>

            <br>
          <div class="col-sm-6">
                <div class="card">
                    <div class="card-header c1">REGISTER</div>
                         <div class="card-body">
                            <?php
                              if(isset($_GET['run'])&& $_GET['run']=="success")
                              {
                                echo "You are successfully registered";
                              }
                          ?> 
                         <form action="register.php" method="post">
                              <div class="form-group">
                                    <label for="name">Name:</label>
                                      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="uname" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="mobno">Mobile No:</label>
                                      <input type="number" class="form-control" id="name" placeholder="Enter your mobile no" name="mob_no" required>
                                  </div>
                                      <div class="form-group">
                                          <label for="pwd">Password:</label>
                                           <input type="password" class="form-control" id="pwd" placeholder="Enter  your password" name="pwd" required>
                                              </div>
   
                                              <button type="submit" class="btn btn-primary">Register</button>
  </form>






  </div>
</div> 

</body>
</html>
