<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>edit Sản phẩm</title>
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
          if(isset($_POST['MaHang']) && !empty($_POST['MaHang']) && 
           isset($_POST['TenHang']) && !empty($_POST['TenHang'])&&  
           isset($_POST['GiaBan']) && !empty($_POST['GiaBan']) &&  
           isset($_POST['SoLuong']) && !empty($_POST['SoLuong']) && 
           isset($_POST['Anh']) && !empty($_POST['Anh']) &&  
           isset($_POST['MaSize']) && !empty($_POST['MaSize']) &&  
           isset($_POST['MaMau']) && !empty($_POST['MaMau'])){
               if(isset($_FILES['Anh']) && $_FILES['Anh']['name'] != "") $Anh=$_FILES['Anh']['name'];
          else { $Anh=$_POST['Anh']; }
          $sql="UPDATE `hang` SET `TenHang` = '".$_POST['TenHang']."',  
          `SoLuong`= '".$_POST['SoLuong']."' ,
          `Anh`= '".$Anh."' ,`Anh`= '".$Anh."',  
          `MaSize`= '".$_POST['MaSize']."' , `MaMau`= '".$_POST['MaMau']."'  
          WHERE `hang`.`MaHang`=".$_POST['MaHang'].";";
          
            $result= mysqli_query($conn,$sql);
            
            if(!$result){
              $error =" Không thể cập nhật Sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin_sp.php">Danh sách sản phẩm</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công sản phẩm "?>
          </h3>
          <a href="./admin_sp.php"> >>Quay lại danh sách sản phẩm</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin </h1>
          <a href="./edit_sp.php?MaHang=<?=$_POST['MaHang']?>"> Quay lại sửa sản phẩm</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM hang WHERE `MaHang`=".$_GET['MaHang']);
              $hang=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($hang)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của >>>
                <?= $hang['TenHang']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_sp.php?action=edit" method="post" enctype = "multipart/form-data">
                    <input type="hidden" name="MaHang" value="<?= $hang['MaHang']?>"> <br>
                    <br>Tên<br> <input type="text" name="TenHang"
                    value="<?= $hang['TenHang']?>"><br>
                    <br>Giá<br> <input type="text" name="GiaBan"
                      value="<?= $hang['GiaBan']?>"><br>
                      <br>SoLuong<br> <input type="text" name="SoLuong"
                      value="<?= $hang['SoLuong']?>"><br>
                      <label>Ảnh sản phẩm: </label> <br>
                       <div >
                       <?php if (!empty($hang['Anh'])) { ?>
                        <img width="165px" src="<?= $hang['Anh'] ?>" /><br /> 
                        <input width="50px;" type="text" name="Anh" value="<?= $hang['Anh'] ?>" />
                        <br>
                        <input width="50px;" type="file" name="Anh" />
                        <?php } ?>                      
                       </div>
                       <br>Size<br>
                        <select name="MaSize" id="">
                      <option <?php if(!empty($hang['TenSize'])) {?> selected
                        <?php }?> value="1">S</option>
                      <option <?php if(!empty($hang['TenSize'])) {?> selected
                        <?php }?> value="2">M</option>
                        <option <?php if(!empty($hang['TenSize'])) {?> selected
                        <?php }?> value="3">L</option>
                      <option <?php if(!empty($hang['TenSize'])) {?> selected
                        <?php }?> value="4">XL</option>

                      
                    </select>
                    <br>Màu<br>
                    <select name="MaMau" id="">
                      <option <?php if(!empty($hang['TenMau'])) {?> selected
                        <?php }?> value="1">Red</option>
                      <option <?php if(!empty($hang['TenMau'])) {?> selected
                        <?php }?> value="2">Blue</option>
                        <option <?php if(!empty($hang['TenMau'])) {?> selected
                        <?php }?> value="3">White</option>
                      <option <?php if(!empty($hang['TenMau'])) {?> selected
                        <?php }?> value="4">Grey</option>

                      
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