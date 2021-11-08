<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <style>
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>
       <?php
	session_start();
	require './config.php';
	if (isset($_POST['submit'])) {
	 	$Email = $_POST["Email"];
		$MatKhau = $_POST["MatKhau"];
		$sql = mysqli_query($conn,"SELECT * FROM nguoidung WHERE Email='$Email' AND MatKhau = '$MatKhau'");
		
		if (mysqli_num_rows($sql) > 0) {
			$row = mysqli_fetch_array($sql);
			$_SESSION['current_user'] = $row['Email'];
			if ($row['MaLND'] == 1) {
                $_SESSION['khachhang']['HoTen']=$row['HoTen'];
                $_SESSION['khachhang']['DiaChi']=$row['DiaChi'];
                $_SESSION['khachhang']['Email']=$row['Email'];
                $_SESSION['khachhang']['MatKhau']=$row['MatKhau'];
				$_SESSION['current_admin'] = $row['MaLND'];
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./index.php'</script>";
			}
			elseif($row['MaLND'] == 3){
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./admin/admin.php'</script>";
			}
		}else
		{
			 echo "<script>alert('Đăng nhập thất bại!');location.href='./login.php'</script>";
		}

	}
    ?>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="Email" id="username" class="form-control" value="<?php if(isset($Email)) echo $Email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="MatKhau" id="password" class="form-control" value="<?php if(isset($MatKhau)) echo $MatKhau; ?>">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="./sign_up.php" class="text-info">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
