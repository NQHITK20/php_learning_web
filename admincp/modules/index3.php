<?php 
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:../../admincp/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title_admin">welcum to admincp</h1>
    <div class="wrapper">
         <?php
            include("config2.php");
            include("header.php");
            include("menu.php");
            include("main.php");
            include("footer.php");
          ?> 
    </div>
</body>
</html>


