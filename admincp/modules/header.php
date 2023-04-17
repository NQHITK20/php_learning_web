<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
  unset($_SESSION['dangnhap']);
  header("Location:../../admincp/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>header admincp</p>
    
    <p><a href="index3.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];} ?></a></p>

</body>
</html>