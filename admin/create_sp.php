
<!DOCTYPE html>
<html lang="en">
 
  <body>
        <?php 
         require '../config.php';
         $error=false;
         if(isset($_GET['action']) && $_GET['action']=='create'){ 
         if(isset($_POST['TenHang']) && !empty($_POST['TenHang']) && 
         isset($_POST['GiaBan']) && !empty($_POST['GiaBan']) && 
         isset($_POST['SoLuong']) && !empty($_POST['SoLuong']) &&
         isset($_FILES['Anh']) && !empty($_FILES['Anh']) && 
         isset($_POST['MaSize']) && !empty($_POST['MaSize']) &&
         isset($_POST['MaMau']) && !empty($_POST['MaMau']) 
         ){
            require '../config.php';
            $Anh=$_FILES['Anh']['name'];
            $chenAnh = "images/".$Anh;
           $sql="INSERT INTO hang (`TenHang`,`GiaBan`,`SoLuong`,`Anh`,`MaSize`,`MaMau`) 

           VALUE ('".$_POST['TenHang']."'
           ,'".$_POST['GiaBan']."'
           ,'".$_POST['SoLuong']."'
           ,'$chenAnh'
           ,'".$_POST['MaSize']."'
           ,'".$_POST['MaMau']."')";
           
           move_uploaded_file($_FILES['Anh']['tmp_name'],"../images/".$Anh);
           
             $result= mysqli_query($conn,$sql);
             
             if(!$result){
                 if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                     $error ="Tài khoản đã tồn tại , Vui lòng nhập tài khoản khác";
                 }
             } 
             mysqli_close($conn);
             if($error !== false){
                 ?>
                 <div>
                     <h1> Thông báo</h1>
                     <h4><?= $error ?></h4>
                     <a href="./create_sp.php">Tạo người dùng mới</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center"> Thêm sản phẩm <?=$_POST['TenHang']?> thành công</h4>
                     <a href="./admin_sp.php">Danh sách sản phẩm</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 

            <?php
    require("./header_admin.php");
?>
<div class="content-body">
<div class="container-fluid">
          <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                    <form action="./create_sp.php?action=create" method="post" enctype = "multipart/form-data">
                                            <label>Tên sản phẩm</label><br>
                                            <input type="text" name="TenHang" value=""><br>
                                            <label>Giá Bán</label><br>
                                              <input type="text" name="GiaBan" value=""><br>
                                              <label>Ảnh</label><br>
                                                <div class="wrap-field">
                                                <div class="right-wrap-field">
                                                    <input width="50px;" type="file" name="Anh"/>
                                                </div>
                                                <br>
                                                </div>
                                              <label> Số lượng</label><br>
                                              <input type="text" name="SoLuong" value=""><br>
                                              <label>Size</label><br>
                                              <select name="MaSize" id="">
                                              <option value="1">S</option>
                                              <option value="2">M</option>
                                              <option value="3">L</option>
                                              <option value="4">XL</option>
                                              </select><br>

                                              <label> Loại sản phẩm</label><br>
                                              <select name="MaMau" id="">
                                                <option value="1">Red</option>
                                                <option value="2">Blue</option>
                                                <option value="3">White</option>
                                                <option value="4">Grey</option>
                                              </select><br>
                                              <br>
                                              <br>
                                              <input type="submit" value="THÊM">

                                              </form>                                              
                                              
                                    </table>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

          
          <?php }?>
        </div><!-- /.row -->
      </div>
    </div>
    </div>
    </div>
    <!-- JavaScript -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
  </body>
</html>