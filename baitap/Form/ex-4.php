<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 4</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $math = $_POST['math'];
        $physic = $_POST['physic'];
        $chemistry = $_POST['chemistry'];
        $rule = $_POST['rule'];
        if($math<0 || $math>10 || $physic<0 || $physic>10 || $chemistry<0 || $chemistry>10 || $rule<0 || $rule>=40)
        {
            $result="Nhập lại điểm";
        }
        else
        {
            $tongdiem = $math + $physic + $chemistry;
            if($math>0 && $physic>0 && $chemistry>0 && $tongdiem>=$rule)
                $result = "Đậu";
            else
                $result ="Rớt";
        }
            
    }
        

    if(isset($_POST['reset'])){
        $reset = $_POST['math'];
        $reset = '';
    }
    
    ?>

    <form action="" method="post">
        <table align="center" bgcolor="green" width="300px">
                <th colspan="3">
                    KẾT QUẢ THI ĐẠI HỌC
                </th> 

                <tr>
                    <td>Toán:</td>
                    <td>
                        <input type="text" name="math"
                        value="<?php if(isset($math)) echo $math; ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td>Lý:</td>
                    <td>
                        <input type="text" name="physic"
                        value="<?php if(isset($physic)) echo $physic; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td>Hóa:</td>
                    <td>
                        <input type="text" name="chemistry"
                        value="<?php if(isset($chemistry)) echo $chemistry; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td>Điểm chuẩn:</td>
                    <td>
                        <input type="text" name="rule"
                        value="<?php if(isset($rule)) echo $rule; ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td>Tổng điểm:</td>
                    <td>
                        <input type="text" name="" disabled value="<?php if(isset($tongdiem)) echo $tongdiem; ?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td>Kết quả thi:</td>
                    <td>
                        <input type="text" name="" disabled value="<?php if(isset($result)) echo $result; ?>"
                        >
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