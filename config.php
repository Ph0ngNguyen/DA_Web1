<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "da_web";
$conn = new mysqli($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()){
    echo 'Lỗi kết nối data base' .mysqli_connect_errno();exit;
}

?>