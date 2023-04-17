
<p>Giỏ hàng nóng :V</p>
<p>    <?php
if(isset($_SESSION['dangky'])){
    echo ' Welcome :' . '<span style="color:red;">'. $_SESSION['dangky'].'</span>';
    echo $_SESSION['id_khachhang'];
}
    ?></p>
<?php

if(isset($_SESSION['cart'])){
   

}
?>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th>Quản lý</th>
        </tr>
        </thead>
        <?php if(isset($_SESSION['cart'])){ 
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
                $i++;
                $tongtien+=$thanhtien;
        ?>
        <tbody>
            <tr>
                <td scope="row"><?php echo $i ?></td>
                <td scope="row"><?php echo $cart_item['masp'] ?></td>
                <td scope="row"><?php echo $cart_item['tensanpham'] ?></td>
                <td scope="row"><img src="../../web/admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>
                <td scope="row">
                    <a href="../../web/mainsp/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <?php echo $cart_item['soluong'] ?>
                    <a href="../../web/mainsp/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </td>
                <td scope="row"><?php echo number_format($cart_item['giasp'],0,',','.').'đ'?></td>
                <td scope="row"><?php echo number_format($thanhtien,0,',','.').'đ'?></td>
                <td scope="row"><a href="../../web/mainsp/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
            </tr>
        </tbody>
        <?php
            }
            ?>
            <tr>
            <td colspan="8">
                <p style="text-align: left;">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'đ'?></p>
                <p style="text-align: right;"><a href="../../web/mainsp/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
                <div style="clear: both;"></div>
                  <?php 
                    if(isset($_SESSION['dangky'])){
                   ?>
                <p style="font-size: 15px; text-align:center; "><a href="../../web/index.php?quanly=thanhtoan">Đặt hàng</a></p>
                <?php
                    }else{
                        ?>
                <p style="font-size: 15px; text-align:center;"><a href="../../web/mainsp/signup-form.php">Đăng ký để đặt hàng</a></p>
                <?php
                    }
                    ?>
            </td>
            </tr>
        <?php 
        }else{
        ?>
        <tr>
            <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
        </tr>
        <?php
        } 
        ?>
</table>

