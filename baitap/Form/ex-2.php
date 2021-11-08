<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 2</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $radius = $_POST['radius'];
        if($radius>0){
            $area = pow($radius,2)*3.14;
            $primerter =2*3.14*$radius;
        }
        else
        $radius="Nhập lại";

    if(isset($_POST['reset'])){
        $reset = $_POST['radius'];
        $reset = '';
    }
    }
    ?>

    <form action="" method="post">
        <table align="center" bgcolor="green">
                <th colspan="2">
                    DIEN TICH VA CHU VI HINH TRON
                </th> 

                <tr>
                    <td>Bán kính:</td>
                    <td>
                        <input type="text" name="radius" placeholder="Nhập bán kính"
                        value="<?php if(isset($radius)) echo $radius; ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td>Diện tích:</td>
                    <td>
                        <input type="text" name="area" disabled value="<?php if(isset($area)) echo $area; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Chu vi:</td>
                    <td>
                        <input type="text" name="perimeter" disabled value="<?php if(isset($primerter)) echo $primerter; ?>" >
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Tính">
                        <input type="submit" name="reset" value="Reset">
                    </td>
                </tr>
        </table>
    </form>
</body>
</html>