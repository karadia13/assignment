<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cart.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style type="text/css">
 

/*-------------------------------------------------------------------------------mainstyle--------------------------------------------*/
  @font-face {
                    font-family:myfontbold;
                    src: url("font/SamsungSans-Regular.ttf");
            }
            @font-face{
            font-family: myfontthin;
                    src: url("font/SamsungSharpSansRegular-Regular.ttf");
            }
             @font-face {
                    font-family:myfont;
                    src: url("font/samsung_s_sharp_by_629lyric-d8y77l9.ttf");
                }
           #symbol h1{
                text-align: center;
                color: black;
                //font-family: myfontthin;
                //background-color: #ddd;
            }
           

    #symbolmain1{
                font-family:myfontthin;
                font-size: 50px ;
                color: black;
                //padding-top:200px;
              }
                #symbolmain2{
                font-family:myfontthin;
                font-size: 35px ;
                color: #333d ;
                //background-color: #ccc;
                //padding-top: 5px;
                //padding-top:200px;
                
            }
            #symbol{
                font-family:myfontthin;
                font-size: 30px ;
               //color: #ddd;
               //padding-left:20%;
               //padding-top: 200px;
               margin-left: 10px;
            }
            #symbolsub{
                font-family:myfontthin;
                color:#333;
                font-size:17.5px;
                word-spacing: 3px;
                padding-left: 165px;
                line-height: 5px;
               
      }
      body{
        margin: 0px;
          background-image: url("images/background.jpg");
          background-size: 50%;
          background-repeat: repeat;
      }
      a{

        text-decoration: none;
        padding-top: 10px;
        padding-left: 20px;
      }
      .menu{
      position: fixed;
      width: 100%;
      z-index: 2;
      }
    
      .menu a{
          float: left;
        display:block;
        
        //text-align: center;
      //padding: 14px 16px;
        text-decoration: none;
        //font-size: 30px;
      }
      
    
      #symboldiv{
        text-align: left;
        text-decoration: none;
        padding: 0px;
        display: flexbox;
      }

.search-container input[type=text] {
  font-family:myfontbold;
  padding: 6px;
  margin-top: 40px;
  font-size: 17px;
  border: none;
}
.search-container[type=text] {
  padding: 6px;
  font-size: 17px;
  border: none;
}
.search-container button{
  margin-top: 6px;
  float:left;
  width: 30px;
  height:30px;
  border: none;
  background-color:#ccc;
  color: #490404;
  cursor: pointer;
}
.search-container button:hover{
  box-shadow:0 0.5px 2px 3px rgb(243, 238, 238);
}
   .search-container input[type=text] {
    float: left;
    display: block;
    text-align: left;
    width: 30%;
    height:30px;
    margin-left: 10px;
    padding: 4px;
  }
  .search-container input[type=text] {
    border: 1px solid #ccc;  
  }
  /*-------------------------------------------------------------------SEARCH------------------------------------------------------*/

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}


#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}
.vertical-menu::-webkit-scrollbar {
    display: none;
}
.vertical-menu {
  width: 250px;
  height: 200px;
  overflow-y: scroll;
  overflow-x: scroll;
}
.dropdown-content {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
  margin-left: 26%;
  margin-top: 70px;
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 100px;
  overflow: hidden;
  border: 1px solid #ddd;
 
}

.dropdown-content a {
  font-family: myfontbold;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.vertical-menu a {

  background-color: #eee;
  width: 100%;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

/*----------------------------------------------------------logout button----------------------------------------------------------*/
  .login-container button
  {
    font-family:myfont;
    margin-top: 40px;
    margin-left: 10px;
  float:left;
  width: 90px;
  height:30px;
  border: none;
  background-color:#ccc;
  color: #490404;
  cursor: pointer;
  }
  .login-container button:hover{
  box-shadow:0 0.5px 2px 3px rgb(243, 238, 238);
}
.logout-container button
  {
    font-family:myfont;
    margin-top: 40px;
    margin-left: 10px;
  float:left;
  width: 90px;
  height:30px;
  border: none;
  background-color:#ccc;
  color: #490404;
  cursor: pointer;
  }
  .signup-container button
  {
    font-family:myfont;
    margin-top: 40px;
    margin-left: 10px;
  float:left;
  width: 90px;
  height:30px;
  border: none;
  background-color:#ccc;
  color: #490404;
  cursor: pointer;
  }

  .logout-container button:hover{
  box-shadow:0 0.5px 2px 3px rgb(243, 238, 238);
}
.signup-container button:hover{
  box-shadow:0 0.5px 2px 3px rgb(243, 238, 238);
}
.cart-container button
  {
    font-family:myfont;
    margin-top: 6px;
    margin-left: 10px;
  float:left;
  width: 90px;
  height:30px;
  border: none;
  background-color:#ccc;
  color: #490404;
  cursor: pointer;
  }
  .cart-container button:hover{
  box-shadow:0 0.5px 2px 3px rgb(243, 238, 238);
}

    #nametext{
      color:#ddd;
      font-size: 20px;
      padding:10px;
      float:left;
      font-family: myfonts;

    }
    ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  overflow:;
  background-color: white;
  font-family: myfontbold;
}

li {
  float: left;
  margin-right: 1px;
  background-color: #333;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 56px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  color: white;
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 .callout-danger{
                padding: 5px;
                text-align: center;
                background-color:red;
                color:white;
              
            }
  .callout-success{
                padding: 5px;
                text-align: center;
                background-color:green;
                color:white;
              
            }
/*------------------------------------------------Wallet dropdown---------------------------*/
.wallet-dropdown {

}

.wallet-dropdown-content {
  border-radius: 15px;
  margin-top: 30px;
  display: none;
  position: absolute;
  background-color: lightblue;
  min-width: 160px;
  box-shadow: 10px 18px 16px 10px rgba(0,0,0,0.2);
  z-index: 1;
}

.wallet-dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.wallet-dropdown-content a:hover {background-color: #ddd;}

.wallet-dropdown:hover .wallet-main {display: block;}

.wallet-dropdown:hover .wallwt-main {background-color: #3e8e41;}
.wallet-main
{
    margin-top: 8%;
    text-align: center;
    font-family: myfontthin;
    align-self: center;
    display: none;
    margin-left:30%;
    padding: 10px;
   box-shadow:0 1px 20px 3px rgb(243, 238, 238);
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
    width: 320px;
    color: #fff;
    font-size: 15px;
    padding: 20px 20px 0;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
    z-index: 1;
}
}

.wallet-container {
  background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
    width: 320px;
    color: #fff;
    font-size: 15px;
    padding: 20px 20px 0;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
  
  
}
.add-btn
{
    background-color: transparent; 
    color: white; 
    border: 2px solid white;
    padding: 12px 22px;
    font-size: 18px;
    border-radius: 50px;
    cursor: pointer;
}
.add-btn:hover
{
  color: black;
  background-color: #ddd;
}
.add-btn:focus
{
  color: black;
  background-color: #ddd;
  outline: none;
}
.amount {
  font-size: 35px;
}

.amount-box p {
  margin-top: 10px;
  margin-bottom: -10px;
}
/*------------------------------------------otp verification----------------------*/
#wrapper {
  font-family: Lato;
  font-size: 1.5rem;
  text-align: center;
  box-sizing: border-box;
  color: #333;
  
  #dialog {
    border: solid 1px #ccc;
    margin: 10px auto;
    padding: 20px 30px;
    display: inline-block;
    box-shadow: 0 0 4px #ccc;
    background-color: #FAF8F8;
    overflow: hidden;
    position: relative;
    max-width: 450px;
    
    h3 {
      margin: 0 0 10px;
      padding: 0;
      line-height: 1.25;
    }
    
    span {
      font-size: 90%;
    }
    
    #form {
      max-width: 240px;
      margin: 25px auto 0;
      
      input {
        margin: 0 5px;
        text-align: center;
        line-height: 80px;
        font-size: 50px;
        border: solid 1px #ccc;
        box-shadow: 0 0 5px #ccc inset;
        outline: none;
        width: 20%;
        transition: all .2s ease-in-out;
        border-radius: 3px;
        
        &:focus {
          border-color: purple;
          box-shadow: 0 0 5px purple inset;
        }
        
        &::selection {
          background: transparent;
        }
      }
      
      button {
        margin:  30px 0 50px;
        width: 100%;
        padding: 6px;
        background-color: #B85FC6;
        border: none;
        text-transform: uppercase;
      }
    }
    
    button {
      &.close {
        border: solid 2px;
        border-radius: 30px;
        line-height: 19px;
        font-size: 120%;
        width: 22px;
        position: absolute;
        right: 5px;
        top: 5px;
      }           
    }
    
    div {
      position: relative;
      z-index: 1;
    }
    
    img {
      position: absolute;
      bottom: -70px;
      right: -63px;
    }
  }
}
</style>
</style>
</head>
<body>
<div class="menu" style="background-color:#ddd">
        <a href="index.php">
        <i class='fa fa-shopping-cart' style="font-size: 40px ;color:#333d"></i>
        <b id="symbolmain1">FRESH </b>
        <b id="symbolmain2"style="padding-right: 50px;"> MART</b><br>
        <b id="symbolsub" >only the fresh</b>
        </a>
        <div class="search-container">
            <form>
              <input type="text" onfocus="myFunctionDisplay()" onblur="setTimeout(myFunction, 300);" autocomplete="off" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <div id="myDropdown" class="dropdown-content">
              <div class="vertical-menu">
              <?php
                $conn = $pdo->open();
                $sql = "SELECT name,slug FROM products";
                $result = $conn->query($sql);
                 foreach($result as $row)
                 {
                  $name=$row['name'];
              ?>
                <a href="search.php?keyword=<?php echo $name ?>"><?php echo $name ?></a>
             <?php    }
              ?>
             <?php 
              $sql = "SELECT name from category";
                $result = $conn->query($sql);
                 foreach($result as $row)
                 {
                  $name=$row['name'];
              ?>
                <a href="category.php?category=<?php echo $name ?>"><?php echo $name ?></a>
             <?php    }
              ?>
            </div>
            </div>
            </form>
          
            <!-- Menu toggle button -->
            <a style="color: #490404;margin-left: 30px;padding-top: 42px; " href="cart_view.php">
              <i style="color: #490404;font-size: 20px;" class="fa fa-shopping-cart"></i>
              <sup style="font-size: 15px;"><span class="label label-success cart_count"></span></sup>
            </a>
            <?php
              if(isset($_SESSION['user'])){
              echo '
                  <a  href="profile.php" style="color:#333;font-family:myfontbold;padding-top:34px;">
                    <span class="hidden-xs"><i style="padding:5px;font-size:20px;" class="fa fa-user"></i>'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                    <div class="wallet-dropdown">
                      <a class="wdropbtn" style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 40px; " href="wallet.php">
                        <i style="color: ##4d00b2;font-size: 20px;" class="fa fa-money"></i>
                      </a>
             <div id="wallet-main" class="wallet-main">
                <p class="page-title">My E-wallet</p>
          
                    <div class="amount-box text-center">
                      <i style="color: ##4d00b2;font-size: 50px;" class="fa fa-money"></i>
                      <br>
                      <p>Total Balance</p>';
              $conn = $pdo->open();
              $stmt = $conn->prepare("SELECT wallet FROM users WHERE id=:user_id");
              $stmt->execute(['user_id'=>$user['id']]);
              $row = $stmt->fetch();
              echo  '<p class="amount">&#8377;'.$row['wallet'].'</p>
                     <br>
                  </div>

            <div class="btn-group text-center">
              <form action="wallet.php">
              <input id="add-btn" type="submit" name="add" class="add-btn" onclick="addmoney();" value="Add Money"><br><br>
              </form>
            </div>
            <br>
            </div>';
                echo'</div>
                    </div>
                  <div class="logout-container">
                  <form action="logout.php">
                    <button type="submit" name="logout">LOGOUT<i class="fa fa-sign-out"></i></button>
                  </form>
                  </div>
                  <br><br><br><br><br><br>';
            }
            else{
              echo '
                <div class="login-container">
          <form action="login.php">
            <button type="submit" name="login">LOGIN <i class="fa fa-sign-out"></i></button>
          </form>
        </div>
        <div class="signup-container">
          <form action="signup.php">
            <button type="submit" class="">SIGNUP</button>
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
    
    </div> 
  </div>
</body>
</html>
