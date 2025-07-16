<!doctype html>
<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
  header("location:loginn.php");
}
?> 
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <style type="text/css">
        .carousel-item img
        {
            align-items: center;
            width: 50%;
            height: 300px;
        }
    </style> 
        
    <title>ECI</title>
  </head>
  <body style='background: linear-gradient(to left,rgba(13, 23, 1, 0.878),rgb(13, 9, 231));' class='text-white'>
 