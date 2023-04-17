
<h1>Trả tiền đá phều :V</h1>
<?php
//include("../../web/admincp/config/config.php");
$id_khachhang=$_SESSION['id_khachhang'];
$code_order=rand(0,99999);
$insert_cart="INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
$query_cart=mysqli_query($mysqli,$insert_cart);
if($insert_cart){
    //them gio hang chi tiet
    foreach($_SESSION['cart'] as $key => $value){
        $id_sanpham=$value['id'];
        $soluong=$value['soluong'];
        $insert_order_details="INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluong) 
        VALUE ('".$id_sanpham."','".$code_order."','".$soluong."')";
        mysqli_query($mysqli,$insert_order_details);

    }
}
unset($_SESSION['cart']);
header('Location:../../web/index.php?quanly=camon');
?>
