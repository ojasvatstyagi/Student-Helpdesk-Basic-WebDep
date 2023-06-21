<?php$con= mysqli_connect('localhost','root','','user');
if (!$con) {    die("Connection failed: " . mysqli_connect_error());}
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$userName=$_POST["userName"];
$email=$_POST["email"];
$password=$_POST["password"];
$repeatPassword=$_POST["repeatPassword"];
$sql="insert into account values('".$firstName."','".$lastName."','".$userName."','".$email."','".$password."','".$repeatPassword."');";
$rs = mysqli_query($con,$sql);
if($rs){ 
  echo '<!DOCTYPE html><html>    
  <head>        
  <title>My Web page</title>        
  <link rel="stylesheet" href="sign_up.css">     
  </head>     
  <body>        
  <div class="container">            
  <div class="content">                
  <h1>The Account is Successfully Created!!</h1>                
  <a href="sign_up_page.html"> Click here to go to login page </a>             
  </div>          
  </div>      
  </body> 
  </html>            
  '; }?>
