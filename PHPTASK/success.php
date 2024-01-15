<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<html>
<style type="text/css">
	.row {
  width: 100%;
  display: inline-block;
  
}
.demo
{
	display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  width: 100%;


}
.center
{
	margin-top: 10%;
	width: 50%;
    text-align: center;
    font-family: myfontbold;
    background-color: #F0F8FF;
    align-self: center;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


}
.main{
	
	background-color: white;
	line-height: 0px;
	padding: 20px;
	margin-left: 15%;
	margin-right: 15%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.bill{
	width:auto;
	float: left;
	padding: 10px;
	font-family:simple;
	

}
.bill p
{
	line-height: 5px;
}
.ship{
	width:auto;
	float: right;
	padding: 10px;
	text-align: right;
	font-family:simple;
}
.ship p
{
	line-height: 5px;
}
a.back
{
	background-color:#002244;
  color:#E1EBEE;
  padding:15px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
a.back {
  display: block;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	
<div class="demo"></div>	
<div class="center">
	<h1 style="color: green;">Welcome</h1>
	<?php
              if(isset($_SESSION['user'])){
              echo '
                 
                    <h1><span class="hidden-xs"><i style="padding:5px;font-size:20px;"></i>'.$user['firstname'].' '.$user['lastname'].'</span></h1>
                  	<h3><p>Email id: '.$user['email'].'</p></h3>
                    <br><br><br><br><br><br>
                  <div class="logout-container">
                  <form action="logout.php">
                  	<button type="submit" name="logout" class="btn btn-info btn-lg">
					          <span class="glyphicon glyphicon-log-out"></span> Log out</a></button>
                  </form>
                  </div>
                  <br><br><br><br><br><br>';
            }
            else{
              echo '
                <div class="login-container">
          <form action="login.php">
          	<button type="submit" name="login" class="btn btn-info btn-lg">
					          <span class="glyphicon glyphicon-log-out"></span> LOGIN</a></button>
                  </form>
          </form>
        </div>
        <br><br><br>
        <div class="signup-container">
          <form action="signup.php">
            <button type="submit" class="btn btn-info btn-lg">
					          <span class="glyphicon glyphicon-log-out"></span> SIGNUP</a></button>
                  </form>
            <br>
            <br>
            <br>
            <br>
            <br>
          </form>
        </div><br>
              ';
            }
     ?>

<br>
</div>

</body>
</html>