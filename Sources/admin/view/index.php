<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HT Shop</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Đăng Nhập</div>
        <div class="card-body">
          <form action="../lib/xulidangnhap.php" method="POST">
            <div class="form-group">
              <div class="form-group">
              <label for="inputEmail">Email </label>
                <input type="email" id="inputEmail" class="form-control"  name="taikhoan" placeholder="Email address" required="required" autofocus="autofocus">
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
              <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control"  name="matkhau" placeholder="Password" required="required">
               <?php
               if(isset($_SESSION['login'])&&$_SESSION['login']=="false")
               {
               ?>
               <div style="margin: 10px 0px; color:red;" class="text-center">
               Tài Khoản Hoặc Mật Khẩu Không Chính Xác!!!
               </div>
               <?php
                unset($_SESSION['login']);
               }
               ?>
                <?php
               if(isset($_SESSION['changepass'])&&$_SESSION['changepass']=="yes")
               {
               ?>
               <div style="margin: 10px 0px; color:#33ccff;" class="text-center">
               Đổi Mật Khẩu Thành Công. Vui Lòng Đăng Nhập Lại!
               </div>
               <?php
                unset($_SESSION['changepass']);
               }
               ?>
               <?php
               if(isset($_SESSION['updateoke'])&&$_SESSION['updateoke']=="true")
               {
               ?>
               <div style="margin: 10px 0px; color:#33ccff;" class="text-center">
               Thay Đổi Mật Khẩu Thành Công Vui Lòng Kiểm Tra Email Để Lấy Mật Khẩu!
               </div>
               <?php
                unset($_SESSION['updateoke']);
               }
               ?>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit"> Đăng Nhập</button>
          </form>
          <div class="text-center">
            <p class="d-block small quenmatkhau"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Quên Mật Khẩu</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Đổi Mật Khẩu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <form action="../lib/xuliquenmatkhau.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" placeholder="Email" required="required">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="recipient-name" name="sdt" placeholder="Password Hiện Tại..." required="required" size="10">
          </div>
      </div>
      <p style="color:red" class="text-center"><i> Chú Ý: Vui lòng điền thông tin chính xác. Nếu thông tin không chính xác sẽ không có phản hồi!!</i></p>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
