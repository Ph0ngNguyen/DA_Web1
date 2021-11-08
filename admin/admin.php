<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        require('../config.php');
        $products=mysqli_query($conn,"SELECT *FROM nguoidung,loainguoidung 
        WHERE nguoidung.MaLND=loainguoidung.MaLND");
        require("./header_admin.php");
    ?>

    
    <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
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
                                        <thead>
                                            <tr>
                                            <th>STT</th>
                                                <th>Họ Tên</th>
                                                <th>Địa Chỉ</th>
                                                <th>Email</th>
                                                <th>Mật Khẩu</th>
                                                <th>Loại người dùng</th>

                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $stt=1;
                                            while($row =mysqli_fetch_array($products)){
                                            ?>
                                            <tr>
                                            <td><?=$stt?></td>
                                            <td><?=$row['HoTen']?></td>
                                            <td> <?=$row['DiaChi']?></td>
                                            <td> <?=$row['Email']?></td>
                                            <td> <?=$row['MatKhau']?></td>
                                            <td> <?=$row['TenLND']?></td>
                                            
                                            <td><a href="./edit_nd.php?MaND=<?=$row['MaND']?>">Sửa</a></td>
                                            <td><a href="./delete_nd.php?MaND=<?=$row['MaND']?>">Xóa</a></td>
                                            </tr>
                                        <?php $stt++; }?>
                                        </tbody>
                                       
                                    </table>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

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