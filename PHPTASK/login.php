<!DOCTYPE html>
<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: success.php');
  }
?>
<?php include 'includes/header.php'; ?>
    
<html>
    <head>
        <link rel="stylesheet" href="formstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body style="background: url('images/bg.png');">
        
            <div id="divmain">
            <div>
            <b id="symbolmain">MD's TASK</b><br> 
           
            <hr>
            </div>
            <form action="verify.php" method="POST">
                
                <h1>WELCOME!</h1>
                <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          
                <br><br><button id="logbutton" type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button><br><br>
                <a href="signup.php" class="text-center"><i class="fa fa-user" style="font-size:20px"></i> Register Now</a><br>
        </form>
    </body>
</html>