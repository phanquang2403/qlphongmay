<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<style>
.dangnhap {
width: 600px;
margin: 10px auto;
}
input[type=text], input[type=password] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}
  
.button {
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
  
.button:hover {
opacity: 0.8;
}
</style>
</head>
<body>

<form action='trangchu.php' class="dangnhap" method='POST'> 
    <h1 align="center">Đăng nhập </h1>
Tên đăng nhập : <input type='text' name='username' /> 
Mật khẩu : <input type='password' name='pasword' /> 
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
<form> 

<?php
$connect = mysqli_connect ('localhost', 'root', '', 'qlphongmay') or die ('Không thể kết nối tới database');
mysqli_set_charset($connect, 'UTF8');
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap']))
{
$username = addslashes($_POST['username']);
$pasword = addslashes($_POST['pasword']);

if (!$username || !$pasword) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
$password = md5($pasword);
$query = "SELECT username, pasword FROM dangnhap WHERE username='$username'";
$result = mysqli_query($connect, $query) or die( mysqli_error($connect));
$row = mysqli_fetch_array($result);
  
if ($pasword != $row['pasword']) {
echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
die();
$connect->close();
}


?>


</body>
</html>