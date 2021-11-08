<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
</head>
<body>
  <?php
    require("./header_admin.php");
?>
<div class="content-body">
<div class="container-fluid">
  <div id="wrapper">
    <div id="page-wrapper">
      <br>
      <br>
      <div class="row">
        <?php
        require '../config.php';
        $error=false;
        if(isset($_GET['action']) && $_GET['action'] == "edit"){
          if(isset($_POST['MaND']) && !empty($_POST['MaND']) &&  
            isset($_POST['HoTen']) && !empty($_POST['HoTen'])&& 
            isset($_POST['DiaChi']) && !empty($_POST['DiaChi']) &&  
            isset($_POST['Email']) && !empty($_POST['Email']) &&  
            isset($_POST['MatKhau']) && !empty($_POST['MatKhau']) &&  
            isset($_POST['MaLND']) && !empty($_POST['MaLND']))
{
            $result= mysqli_query($conn,"UPDATE `nguoidung` SET `HoTen` = '".$_POST['HoTen']."', 
              `DiaChi`= '".$_POST['DiaChi']."', 
              `Email`= '".$_POST['Email']."' , 
              `MatKhau`= '".$_POST['MatKhau']."' , 
              `MaLND`= '".$_POST['MaLND']."'  WHERE `nguoidung`.`MaND`=".$_POST['MaND'].";");
            if(!$result){
              $error =" Không thể cập nhật tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin.php">Danh sách tài khoản</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công tài khoản "?>
          </h3>
          <a href="./admin.php"> >>Quay lại danh sách tài khoản</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
          <a href="./edit_nd.php?MaND=<?=$_POST['MaND']?>"> Quay lại sửa tài khoản</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM nguoidung WHERE `MaND`=".$_GET['MaND']);
              $nguoidung=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($nguoidung)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của >>>
                <?= $nguoidung['HoTen']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_nd.php?action=edit" method="post">
                    <input type="hidden" name="MaND" value="<?= $nguoidung['MaND']?>"> <br>
                    <br>Tên<br> <input type="text" name="HoTen"
                    value="<?= $nguoidung['HoTen']?>"><br>
                    <br>Sđt<br> <input type="text" name="DiaChi"
                      value="<?= $nguoidung['DiaChi']?>"><br>
                    <br>Gmail<br> <input type="text" name="Email"
                      value="<?= $nguoidung['Email']?>"><br>
                    <br> Password<br> <input type="text" name="MatKhau"
                      value="<?= $nguoidung['MatKhau']?>"><br>
                    <br>Loại người dùng <br>
                    <select name="MaLND" id="">
                      <option <?php if(!empty($nguoidung['TenLND'])) {?> selected
                        <?php }?> value="1">Khách hàng
                      </option>
                      <option <?php if(!empty($nguoidung['TenLND'])  ) {?> selected
                        <?php }?> value="2">Nhân viên
                      </option>
                      <option <?php if(!empty($nguoidung['TenLND'])  ) {?> selected
                        <?php }?> value="3">Admin
                      </option>
                    </select>
                    <br><br> <input type="submit" value="Chỉnh sửa">
                  </form>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php } }?>
      </div><!-- /.row -->
    </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->
</div>
</div>
</body>

</html>