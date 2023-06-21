<?php
if (!isset($_GET['submit'])) 
{  
$useName= $_GET["userName"];  
$password = $_GET["password"];
$repeatPassword= $_GET["repeatPassword"];  
$con= mysqli_connect('localhost','root','','user');  
$sql="select * from account where userName='".$userName."' and password='".$password."' and repeatPassword='".$repeatPassword."';";
  echo $sql;  
  $result=mysqli_query($con,$sql);  
  $resultcheck=mysqli_num_rows($result);  
  if($resultcheck>0)  
  { 
  echo '<html> 
  <body> 
  <script> location.replace("login_page.html"); 
  </script> 
  </body> 
  </html>'; 
  shell_exec("touch cookie"); $com7="echo '".$email1."' >> cookie "; shell_exec($com7);  }  
  else  
  {  echo '<!DOCTYPE html>
  <html>    
  <head>        
  <title>My Web page</title>             
  </head>     
  <body>        
  <div class="container">            
  <div class="content">                
  <h1>Details Entered Are Invalid</h1>             
  </div>          
  </div>      
  </body> 
  </html>            ';  
  }  
  }
  mysqli_close($con);?>


