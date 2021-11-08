<!DOCTYPE html>
<html lang="en">
<body>
    
<?php

        $error=false;
        if(isset($_GET['MaHang']) && !empty($_GET['MaHang'])){
        require '../config.php';
        $sql="DELETE FROM `hang` WHERE `hang`.`MaHang`=";
        $result= mysqli_query($conn,$sql.$_GET['MaHang']);
        if(!$result){
            $error = "Không thể xóa sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_sp.php">Danh sách sản phẩm</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa sản phẩm thành công</h1>
                <a href="./admin_sp.php"> Danh sách sản phẩm</a>
            </div>
            <?php }?>
        <?php }?>
        
</body>
</html>