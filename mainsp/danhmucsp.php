<?php
$sql_pro="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro=mysqli_query($mysqli,$sql_pro);
//get ten danh muc
$sql_cate="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate=mysqli_query($mysqli,$sql_cate);
$row_title=mysqli_fetch_array($query_cate);
?>
<h1> Danh mục sản phẩm  :  <?php echo $row_title['tendanhmuc'] ?></h1>
<div class="row">
    <?php
    while($row_pru=mysqli_fetch_array($query_pro)){
    ?>
    <div class="card col-md-3 col-sm-12 col-xs-4">
              <img class="card-img-top" src="../../web/admincp/modules/quanlysp/uploads/<?php echo $row_pru['hinhanh']?>" alt="Card image" style="width:100%;height: 80%;">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_pru['tensanpham']?></h4>
                <p class="card-price"><?php echo number_format( $row_pru['giasp'],0,',','.'). '₫'?></p>
                <a href="../../web/index.php?quanly=sanpham&id=<?php echo $row_pru['id_sanpham'] ?>" class="btn btn-primary stretched-link">Chi tiết <i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
              </div>
           </div>
    <?php
    }
    ?>
  </div>