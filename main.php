<div class="contens">

<?php
if(isset($_GET['quanly'])){
$tam=$_GET['quanly'];
}
else{
    $tam="";
}
if($tam=='danhmucsp'){
    include("mainsp/danhmucsp.php");
}
if($tam=='sanpham'){
    include("mainsp/sanpham.php");
}
if($tam=='hangmoi'){
    include("mainsp/hangmoi.php");
}
if($tam=='giohang'){
    include("mainsp/giohang.php");
}
if($tam=='thanhtoan'){
    include("mainsp/thanhtoan.php");
}
if($tam=='timkiem'){
    include("mainsp/timkiem.php");
}
if($tam=='camon'){
    include("mainsp/camon.php");
}
else{
  include("mainsp/index2.php");
}
?>

   
</div>