<?php
$sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1)
{
  unset($_SESSION['dangky']);
}
if(isset($_GET['user'])&&$_GET['user']==1)
{
  unset($_SESSION['tenkhachhang']);
}

?>
<!-- Thanh nav -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!-- Brand -->
<a class="navbar-brand" href="index.php?quanly=trangchu">
  <img src="./img/logo.jpg" alt="logo" style="width:40px;">
</a>
<ul class="navbar-nav">
<?php
while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
?>
  <li class="nav-item">
    <a class="nav-link" href="index.php?quanly=danhmucsp&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a>
  </li>
  <?php
}
  ?>
  <a class="nav-link" href="../web/mainsp/tin">Tin tức </a>

   
  <form class="form-inline" action="../web/index.php?quanly=timkiem" method="POST">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="tukhoa">
    <button class="btn btn-success" type="submit" name="timkiem">Search</button>
  </form>

    
   <!-- Login -->
   <?php
if(isset($_SESSION['dangky'])){
  ?>
  <a class="nav-link" href="../web/index.php?user=1"><span>Welcome : <?php echo $_SESSION['dangky'] ?> <i class="fa fa-user" aria-hidden="true"></i></span>
  <?php
}else{
  ?>
  <a class="nav-link" href="./mainsp/dangnhap.php">Đăng nhập <i class="fa fa-user" aria-hidden="true"></i></a>
  <?php
}
?>
  <!-- Sign up -->
  <?php
if(isset($_SESSION['dangky'])){
  ?>
  <a class="nav-link" href="../web/index.php?dangxuat=1">Đăng xuất <i class="fa fa-sign-out" aria-hidden="true"></i></a>
  <?php
}else{
  ?>
  <a class="nav-link" href="./mainsp/signup-form.php">Đăng ký <i class="fa fa-sign-in" aria-hidden="true"></i></a>
  <?php
}
?>
  <!-- shoping bag -->
 <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Giỏ hàng">
  <a class="nav-link" href="./index.php?quanly=giohang"><i class="fa fa-shopping-basket" aria-hidden="true"><sup>0</sup></i></a>
   </button>
  
  </ul>
  </nav>