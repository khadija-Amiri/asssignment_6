<style>
   form{
      color:green;
      background-image: url("4.jpg");
      background-size:cover;
      border: 4px solid blue;
      width: 300px;
      height: 600px:
      margin:10px 20px;
      margin-right:auto;
      margin-left:auto;
     padding:10px;
      
   }
   input[type=text], input[type=Email]{
           color:blue;
            width: 200px;
            padding: 15px 20px;
            padding-right: 40px;
            padding-left:40px;
            margin: 10px 3px;
            display: inline-block;
            border: 2px solid blue;
            box-sizing: border-box;
   }
   button{
      border:2px solid blue;
      height: 30px;
      width:98%;
      color:green;
      background-color: lightgreen;
      cursor: pointer;
      
   }
</style>




<?php
session_start();

if(isset($_SESSION["authunticate"])){
   header('location: welcome_page.php');
}



include "login.php";



 $new_login= new login();

 echo "<form action= 'welcome_page.php' method= 'Post'  >"; 
 
   
    
    echo   $new_login->login_page=" <b>"." Name "."</b>" ."  <input type= 'text' placeholder = 'Enter Your Name'  >";
    echo "<br />";
   echo "<br />";
    echo  $new_login->Email=" <b>"." Email "."</b>" ."<input type='email'  placeholder= 'Enter Email'  >";
   echo "<br />";
   echo "<br />";
   echo "<button type='submit'>  <b>login </b> </button>"; 
    
    echo "</form>";


    $_SESSION["authunticate"]= true;

    header('location:welcome_page.php');
   
 


