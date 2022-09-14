<?php
session_start();
if(!isset($_SESSION["authunticate"])){
    header('location: rigister-back.php');
 }else{

echo " welcome to our main page here";}