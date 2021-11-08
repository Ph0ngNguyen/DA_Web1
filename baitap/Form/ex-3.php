<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 3</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $old_number = $_POST['old_number'];
        $new_number = $_POST['new_number'];
        if($old_number>0 || $new_number > $old_number) $pay="Nhập lại chỉ số";
        else
        $pay = ($new_number - $old_number)* 20000;
        

    if(isset($_POST['reset'])){
        $reset = $_POST['name'];
        $reset = '';
    }
    }
    ?>

    <form action="" method="post">
        <table align="center" bgcolor="green">
                <th colspan="3">
                    THANH TOÁN TIỀN ĐIỆN
                </th> 

                <tr>
                    <td>Tên chủ hộ</td>
                    <td>
                        <input type="text" name="name" placeholder="Nhập tên chủ hộ"
                        value="<?php if(isset($name)) echo $name; ?>"
                        >
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>Chỉ số cũ:</td>
                    <td>
                        <input type="text" name="old_number" value="<?php if(isset($old_number)) echo $old_number; ?>">
                    </td>
                    <td>(Kw)</td>
                </tr>

                <tr>
                    <td>Chỉ số mới:</td>
                    <td>
                        <input type="text" name="new_number" value="<?php if(isset($new_number)) echo $new_number; ?>">
                    </td>
                    <td>(Kw)</td>
                </tr>
                <tr>
                    <td>Đơn giá:</td>
                    <td>
                        <input type="text" name="price" disabled value="20000">
                    </td>
                    <td>(VNĐ)</td>
                </tr>

                <tr>
                    <td>Số tiền thanh toán:</td>
                    <td>
                        <input type="text" name="pay" disabled value="<?php if(isset($pay)) echo $pay; ?>">
                    </td>
                    <td>(Kw)</td>
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