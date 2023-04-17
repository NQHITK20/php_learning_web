<style>
    .wrapper_chitiet{
        height: auto;
        margin: 0 auto;
    }
    .chitiet-sanpham{
        float: right;
    }
</style>
<p>Chi tiết hàng nóng</p>
<?php
$sql_chitiet="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <form action="../../web/mainsp/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="post">
    <div class="hinhanh-sanpham">
        <img src="../../web/admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="bug hinh anh sr" >
        <div class="chitiet-sanpham">
         <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham']?></h3>
          <p>Giá: <?php echo number_format( $row_chitiet['giasp'],0,',','.'). '₫'?></p>
          <p>Số lượng còn: <?php echo number_format($row_chitiet['soluong'])?></p>
           <p>Danh mục sp: <?php echo $row_chitiet['tendanhmuc']?></p>
          <p>Tóm tắt sản phẩm: <?php echo $row_chitiet['tomtat']?></p>
         <input type="submit" value="Thêm giỏ hàng" name="themgiohang">
    </div>
    </form>
</div>

</div>
<?php
?>
<?php
}
?>