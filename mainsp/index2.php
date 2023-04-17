<?php
$sql_pro="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY 
 id_sanpham DESC LIMIT 25";
$query_pro=mysqli_query($mysqli,$sql_pro);//bug
?>
<h3>Sản phẩm mới nhất</h3>
<div class="row">
   <?php
    while($row_pro=mysqli_fetch_array($query_pro)){
    ?>
    <div class="card col-md-3 col-sm-12 col-xs-4">
              <img class="card-img-top" src="../../web/admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="Card image" style="width:100%;height: 80%;">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_pro['tensanpham']?></h4>
                <p class="card-danhmuc"><?php echo $row_pro['tendanhmuc']?></p>
                <p class="card-price"><?php echo number_format( $row_pro['giasp'],0,',','.'). '₫'?></p>
                <a href="../../web/index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="btn btn-primary stretched-link">Chi tiết <i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
              </div>
           </div>    
    <?php
    }
    ?>
</div>
