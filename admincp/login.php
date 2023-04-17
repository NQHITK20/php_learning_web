<?php 
session_start();
include("config/config.php");
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $matkhau= md5($_POST['password']);
    $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    $row =mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("Location:../admincp/modules/index3.php");
    }
    else{
        echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác,vui lòng nhập lại")</script>';//bug
        header("Location:login.php");
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="../../web/img/login-pic.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="" method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0"><img src="../../web/img/logo.jpg" alt="logo" style="width:100px;"></span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập Admin</h5>
      
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Tên Đăng nhập</label>
                          <input type="text" id="form2Example17" class="form-control form-control-lg" name="username" />
                          
                        </div>
      
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example27">Mật khẩu</label>
                          <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                        </div>
      
                        <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="dangnhap">Đăng nhập</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Quên mật khẩu?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Chưa tạo tài khoản? <a href="../../web/mainsp/signup-form.php" style="color: #393f81;">Đăng ký ở đây</a></p>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;"><a href="../../web/index.php"
                            style="color: #393f81;">Trở lại trang chủ</a></p>
                        <a href="#!" class="small text-muted">Điều khoản sử dụng.</a>
                        <a href="#!" class="small text-muted">Chính sách bảo mật</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </body>
</html>