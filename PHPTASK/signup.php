<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="formstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body style="background: url('images/bg.png')";>
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout-danger'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout-success'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
            <div id="divmain">
            <div>
            <b id="symbolmain">MD's TASK</b><br> 
            <hr>
            </div>

        <form action="register.php" method="POST">
            <h1>WELCOME!</h1>
            <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
    
            <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
         
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
           
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          
          <button id="logbutton" type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>

            <br><br>
             <a href="login.php"><i class="fa fa-user" style="font-size:20px"></i> Already User?</a><br>
        </form>
    </body>
</html>