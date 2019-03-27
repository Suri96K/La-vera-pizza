<?php
require 'db_connect.php';
?>


<!DOCTYPE html>
<html>
<head>
    
    <script type="text/javascript" src="validate.js">
    </script>
    
<style>
    
body,html {font-family: sans-serif; font-size: 20px; height: 100%; margin: 0; background-color: #e8e7e7;}
    
.button {background-color: #f4f4f7; padding: 13px 32px; color:#484848; border:none; text-decoration:  none; text-align: center; display:inline-block; border-radius: 6px; cursor:pointer; float:none;margin: 8px 6px;font-style: italic; font-size:17px;}

.nav {margin-left: 110px; font-style: italic;}
    
.drop {position: relative; display: inline-block;}

.dropdown {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;font-size:14px;}

.dropdown a {color: black;padding: 12px 16px;text-decoration: none;display: block;}

.dropdown a:hover {background-color: #c6c6c6}

.drop:hover .dropdown {display: block;}

.button:hover{background-color: #127cc9; color: white; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.18),0 4px 7px 0 rgba(0,0,0,0.25);}
    
#b1 { margin-left: 600px;font-size: 34px; color: #343232;}

.reg {background-color:#98989b; border: 0.6px solid #550000;color: #ffffff;padding: 6px 21px; text-align: center; font-style: italic; font-size:17px;text-decoration: none;display: inline-block; cursor: pointer; float: right;margin: 30px 0px;}
    
#re1{border-left: 1px solid #484848;}
    
.header{background-image: url("images/head.jpg") ; padding: 240px 32px;}
.header{padding:15px;}
    
#search {margin-left: 555px;  box-sizing: border-box;border: 1px solid #ccc;width: 250px;border-radius: 5px;font-size: 14px;background-image: url("images/search_icon.png");background-position: 10px 40px; background-repeat: no-repeat;padding: 8px 10px ;}
#search2 {padding: 6px 12px;}

.profile{float:right;margin-right: -380px; border: padding: 20px 10px;} 
.acc{padding: 4px 12px;background-color: #f4f4f7;color:#484848; border:none; text-decoration:  none; text-align: center; display:inline-block; border-radius: 6px; cursor:pointer; float:none;font-style: italic; font-size:17px; }
.profile img {height: 12%; width:15%;cursor: pointer;}
 
.reg:hover{background-color:#178430 ; color: aliceblue;}

form{ border: 2px solid #9d9494; border-radius: 5px; padding: 52px 35px; display: inline-block; margin-left: 500px; font-family:"Chivo";}
form input{padding: 10px 10px; width: 290px; display: inline-block; border: 1px solid #ddd; border-radius: 5px;margin-left: 30px;}
.form_button{padding: 10px 18px; display: inline-block; margin-left: 10px;background-color: #0a840a; border: none;color: whitesmoke; border-radius: 4px;cursor: pointer;}
#btnReset {margin-left: 150px;}


.footer { background-image: url("images/f5.jpg"); color: #e5e0e0;background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;}
    
.foot{margin-left: 130px;}   
.foot img {height: 40%; width: 40%;cursor: pointer;}
.foot b,p{ font-size: 18px; font-style: italic;}
#add {margin-left: 80px;}       

</style>    
    
</head>
<body>
<div class="header"> 
  
<br>
<input type="text" id="search" placeholder="Search here..">
<button class="button" id="search2"> search</button>
    
<div class="profile"> 
<img src="images/profile.png"> <br>
<button class="acc">My Account</button>    
</div>

<br><br><br><br>
    
<div class="nav">
  <a class="button" href="home.html">Home</a>
    
<div class="drop">
  <a class="button" id="menu">Menu</a>
  <div class="dropdown">
    <a href="#">Pizzas</a>
    <a href="#">Pasta & Others </a>
    <a href="#">Dessert</a>
    <a href="#">Beverages</a>
  </div>
</div>
  <a class="button">Packages</a>
  <a class="button">Promos</a>
  <a class="button">Feedback</a>
  <a class="button">Careers</a>
  <a class="button">About Us</a>
  <a class="button">Shopping Cart</a>

<a class="reg" href="login.html"  target="_blank">login</a>
<a class="reg" id="re1" href="register.html">Register</a>
 <br><br>
</div>  
</div>
<br><br>
    
            <?php
            if (isset($_POST["fname"])) && isset($_POST["password"]) && isset($_POST["cardNumber"]))
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
				$cardNumber = $_POST["cardNumber"];
            }
            else
            {
                $error = "one or more fields are not filled";
                echo $error;
            }

            //insert data to the database
            if(isset($_POST["btnSignup"]))
            {
                $insertString = "INSERT INTO log_base VALUES('$username', '$fname', '$lname', '$mobileno','$password')";

                if(!mysqli_query($con, $insertString))
                {
                    die('Error: '.mysqli_error());
                }
                else
                {
                    echo '<br/>';
                    echo ' Sign up successful! Please login to your account..';
                }
            }

            ?>

            <br>
            <div class="text-center"><a type="submit" class="form_button" href="sign_in.php">Login</button></a></div>

        </div>
    
    
<br><br>
<div class="footer">
<div class="foot">
    
<br> <br><br>
<b>..get in touch with us.. </b> <br><br><br>
    
<table >
<tr>
    <td><img src="images/fb.png"</td>
    <td><img src="images/tw.png"</td>
    <td><img src="images/g.png"</td>
    <td><img src="images/in.png"</td>
</tr>
</table>
    
 <br><br><br><b>Address:</b> <b id="add">47, blah blah road , Kandy.</b> <br><br>
    
    
<b>Phone number: </b> <b id="add"> +94772225780</b><br><br>
    

<p> English US | UK <br>
<br>Copyright @ 2017 Tk's Pizza. All Rights reserved.</p>    
<br><br>
    
</div>    
</div>

</body>
</html>
