
<style>
   form{
      color:white;
      background-image: url("3.jpg");
      background-size:cover;
      border: 4px solid blue;
      width: 500px;
      height: 600px:
      margin:10px 20px;
      margin-right:auto;
      margin-left:auto;
     padding:10px;
      
   }
   input[type=text], input[type=Email], input[type=date]{
           color:blue;
            width: 400px;
            padding: 15px 20px;
            padding-right: 40px;
            padding-left:40px;
            margin: 10px 3px;
            display: block;
            border: 2px solid blue;
            box-sizing: border-box;
   }
   button{
      border:2px solid blue;
      height: 30px;
      width:98%;
      color:white;
      background-color: darkgreen;
      cursor: pointer;
      
   }
</style>


<?php

session_start();

if(isset($_SESSION["authunticate"])){
   header('location: welcome_page.php');
}


include "rigester_page.php";

$new_rigister= new rigister();

echo "<form action= 'welcome_page.php' method= 'Post'  >"; 

  
   echo   $new_rigister->rigister_page=" <b>"." Name "."</b>" ."  <input type= 'text' placeholder = 'Enter Your Name'  >";
   echo "<br />";
   echo "<br />";
   echo   $new_rigister->rigister_page=" <b>"." LastName "."</b>" ."  <input type= 'text' placeholder = 'Enter Your LastName'  >";
   echo "<br />";
   echo "<br />";
   echo   $new_rigister->rigister_page=" <b>"." BirthDay "."</b>" ."  <input type= 'date' placeholder = ''  >";
   echo "<br />";
   echo "<br />";
   echo  $new_rigister->rigister_page=" <b>"." Email "."</b>" ."<input type='email'  placeholder= 'Enter Email'  >";
   echo "<br />";
   echo "<br />";
   echo   $new_rigister->rigister_page=" <b>"." Password "."</b>" ."<input type= 'text' placeholder= 'Enter Password'>";
   echo "<br />";
   echo "<br />";
   echo "<button type='submit'>  <b>submite </b> </button>"; 
   
   echo "</form>";


   
   $_SESSION["authunticate"]= true;

   header('location:welcome_page.php');
