<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
  color: #17a2b8;
}

.container {
	max-width: 360px;
	margin-top: 50px;	
}

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }
</style>

<?php
	    session_start();
	    require './config.php';
	    $errors = true; 
	     if (isset($_POST['submit'])){
		$HoTen = $_POST["HoTen"];
        $DiaChi=$_POST["DiaChi"];
		$Email=$_POST["Email"];
		$MatKhau = $_POST["MatKhau"];
		$MatKhau2 = $_POST["MatKhau2"];
		$MaLND = 1;

		if ($MatKhau != $MatKhau2) {
			echo "<script>alert('Mật khẩu nhập lại không đúng!');
		  	location.href='./sign_up.php'
				</script>";
				$error = false;
			
		 }
		$user_check_query = "SELECT * FROM nguoidung WHERE Email='$Email' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
	 	$nguoidung = mysqli_fetch_assoc($result);
	  	if ($nguoidung) { // if user exists
		    if ($nguoidung['Email'] === $Email) {
		     echo "<script>alert('Tài khoản đã tồn tại!');
		  	location.href='./sign_up.php'
				</script>";
				$error = false;
		    }

			
	  	}

	  	if ($error=true) {
		  	$query = "INSERT INTO nguoidung(HoTen,DiaChi,Email,MatKhau,MaLND) 
		  	values('$HoTen','$DiaChi','$Email','$MatKhau','$MaLND')";
          
             
              $bien=mysqli_query($conn, $query);
              if($bien){
                $_SESSION['khachhang']['HoTen']=$HoTen;
                $_SESSION['khachhang']['DiaChi']=$DiaChi;
                $_SESSION['khachhang']['Email']=$Email;
                echo "<script>alert('Đăng ký thành công!');	location.href='./sign_up.php'</script>";
              }	else{
                echo "<script>alert('Đăng ký thất bại!');location.href='./sign_up.php'</script>";
              }
	      }
	  else {echo "<script>alert('Đăng ký thất bại!');location.href='./sign_up.php'</script>";}
	}
?>

<div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="#" role="form">
						<div class="form-group">
							<h2>Sign up</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">YourName</label>
							<input id="signupName" name="HoTen" type="text" maxlength="50" class="form-control" require="" value="<?php if(isset($HoTen)) echo $HoTen;?>">
						</div>
						<div>
							<label class="control-label" for="signupAdress">Adress</label>
							<input id="signupAdress" name="DiaChi" type="text" maxlength="50" class="form-control" require="" value="<?php if(isset($DiaChi)) echo $DiaChi;?>">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Email</label>
							<input id="signupEmail" name="Email" type="email" maxlength="50" class="form-control" require="" value="<?php if(isset($Email)) echo $Email;?>">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Password</label>
							<input id="signupPassword" name="MatKhau" type="password" maxlength="50" class="form-control" placeholder="at least 6 characters" length="40" require="" value="<?php if(isset($MatKhau)) echo $MatKhau;?>">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password again</label>
							<input id="signupPasswordagain" name="MatKhau2" type="password" maxlength="50" class="form-control" require="" value="<?php if(isset($MatKhau)) echo $MatKhau2;?>">
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" name="submit" class="btn btn-info btn-block">Create your account</button>
						</div>
						<hr>
						<p></p>Already have an account? <a href="./login.php">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>




   
