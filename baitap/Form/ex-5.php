<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 5</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $start = $_POST['start'];
        $finish = $_POST['finish'];
        if($start<10 || $finish >24 ) $result ="Nhập lại giờ";
        else
        {
            if($start > $finish) $result="giờ bắt đầu phải nhỏ hơn giờ kết thúc";
            else{
                if($start <17) 
                {
                    if($finish <17)
                        $result=($finish - $start)*20000;
                    else
                        $result=(17-$start)*20000 + ($finish-17)*45000;
                }
                else
                    $result = ($finish-17)*45000;
            }
        }
           
    }
    if(isset($_POST['reset'])){
        $reset = $_POST['radius'];
        $reset = '';
    }
    ?>

    <form action="" method="post">
        <table align="center" bgcolor="green">
                <th colspan="2">
                    TÍNH TIỀN KARAOKE
                </th> 

                <tr>
                    <td>Giờ bắt đầu:</td>
                    <td>
                        <input type="text" name="start"
                        value="<?php if(isset($start)) echo $start; ?>"
                        >
                    </td>
                    <td>
                        (h)
                    </td>
                </tr>

                <tr>
                    <td>Giờ kết thúc:</td>
                    <td>
                        <input type="text" name="finish"
                        value="<?php if(isset($finish)) echo $finish; ?>"
                        >
                    </td>
                    <td>
                        (h)
                    </td>
                </tr>

                <tr>
                    <td>Tiền thanh toán:</td>
                    <td>
                        <input type="text" name="" disabled
                        value ="<?php if(isset($result)) echo $result; ?>"
                        >
                    </td>
                    <td>
                        (VNĐ)
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Tính tiền">
                        <input type="submit" name="reset" value="Reset">
                    </td>
                </tr>
        </table>
    </form>
</body>
</html>