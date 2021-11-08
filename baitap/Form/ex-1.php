<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        $witdh=$_POST['width'];
        $height=$_POST['height'];
        if($witdh<$height || $witdh<=0 || $height<=0) $area="Nhap lai";
        else
        $area=$witdh*$height;
    }
?>

    <form action="" method="post">
        <table bgcolor="#orange" align="center">
            <tr>
                <td colspan="2" bgcolor="#orange">
                    <h2>Tinh toan tren HCN</h2>
                </td>
            </tr>
            <tr>
                <td>Width</td>
                <td>
                    <input type="text" name="width" placeholder="Nhap chieu rong"
                    value="<?php if(isset($witdh)) echo $witdh;?>"
                    >
                </td>
            </tr>
            <tr>
                <td>Height</td>
                <td>
                    <input type="text" name="height" placeholder="Nhap chieu dai"
                    value="<?php if(isset($_POST['height'])) echo $height;?>"
                    >
                </td>
            </tr>
            <tr>
                <td>Area</td>
                <td>
                <input type="text" name="area" disabled value="<?php if(isset($area)) echo $area;?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tinh">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>