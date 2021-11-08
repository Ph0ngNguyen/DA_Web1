<!DOCTYPE html>
<html lang="en">
<body>
<?php

        $error=false;
        if(isset($_GET['MaND']) && !empty($_GET['MaND'])){
        require '../config.php';
        $sql="DELETE FROM `hang` WHERE `hang`.`MaND`=";
        
        $result= mysqli_query($conn,$sql.$_GET['MaND']);
        if(!$result){
            $error = "Không thể xóa tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin.php">Danh sách tài khoản</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tài khoản thành công</h1>
                <a href="./admin.php"> Danh sách tài khoản</a>
            </div>
            <?php }?>
        <?php }?>
        
</body>
</html>