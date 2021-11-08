
<!DOCTYPE html>
<html lang="en">
 
  <body>
      
        <?php 
         require '../config.php';
         $error=false;
         if(isset($_GET['action']) && $_GET['action']=='create'){ 
         if(isset($_POST['HoTen']) && !empty($_POST['HoTen']) && 
         isset($_POST['DiaChi']) && !empty($_POST['DiaChi']) && 
         isset($_POST['Email']) && !empty($_POST['Email'])  &&
         isset($_POST['MatKhau']) && !empty($_POST['MatKhau'])  &&
         isset($_POST['MaLND']) && !empty($_POST['MaLND']) 
         )
         {
           $sql="INSERT INTO nguoidung (`HoTen`,`DiaChi`,`Email`,`MatKhau`,`MaLND`) 
           VALUE ('".$_POST['HoTen']."'
           ,'".$_POST['DiaChi']."'
           ,'".$_POST['Email']."'
           ,'".$_POST['MatKhau']."'
           ,'".$_POST['MaLND']."')";

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
                     <a href="./create_nd.php">Tạo người dùng mới</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center"> Tạo người dùng <?=$_POST['HoTen']?> thành công</h4>
                     <a href="./admin.php">Danh sách nhà cung cấp</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 

          <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> 
                                    <a href="./create_nd.php">THÊM</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                    <form action="./create_nd.php?action=create" method="POST">
                                              <label>Họ Tên</label><br>
                                              <input type="text" name="HoTen" value=""><br>
                                              <label>Địa Chỉ</label><br>
                                              <input type="text" name="DiaChi" value=""><br>
                                              <label>Email</label><br>
                                              <input type="text" name="Email" value=""><br>
                                              <label>Mật Khẩu</label><br>
                                              <input type="text" name="MatKhau" value=""><br>
                                              <label>Loại người dùng</label><br>
                                              <select name="MaLND" id="">
                                              <option value="1">Khách hàng
                                              </option>
                                              <option value="2">Nhân viên
                                              </option>
                                              <option value="3">Admin
                                              </option>

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
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
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