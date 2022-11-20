<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>thêm phòng</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <style>
    /* Bordered form */
    form {
      border: 3px solid #f1f1f1;
    }
    
    /* Full-width inputs */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 6px 10px;
      margin: 4px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 8px 10px;
      margin: 4px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    /* Add a hover effect for buttons */
    button:hover {
      opacity: 0.4;
    }
    
    /* Extra style for the cancel button (red) */
    .cancelbtn {
      width: auto;
      padding: 5px 9px;
      background-color: #f44336;
    }
    
    /* Center the avatar image inside this container */
    .imgcontainer {
      text-align: center;
      margin: 10px 0 5px 0;
    }
    
    /* Avatar image */
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    /* Add padding to containers */
    .container {
      padding: 8px;
    }
    
    /* The "Forgot password" text */
    span.psw {
      float: right;
      padding-top: 8px;
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
      .cancelbtn {
        width: 50%;
      }
    }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="trangchu.php" class="nav-link">Trang chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.php" class="nav-link">Đăng xuất</a>
      </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">Nội dung quản lý</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="trangdanhsach.php" class="nav-link">
            <i class=""></i>
            <p>
              Danh sách phòng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="trangvattu.php" class="nav-link">
            <i class=""></i>
            <p>
              Danh sách vật tư
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="trangthongke.php" class="nav-link">
            <i class=""></i>
            <p>
              Thống kê
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="timkiem.php" class="nav-link">
            <i class=""></i>
            <p>
              Tìm kiếm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="inhoadon.php" class="nav-link">
            <i class=""></i>
            <p>
              Hóa đơn đã xuất
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="chitietnhan.php" class="nav-link">
            <i class=""></i>
            <p>
              Chi tiết nhận
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="phieunhan.php" class="nav-link">
            <i class=""></i>
            <p>
              Phiếu nhận
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="chitietgiao.php" class="nav-link">
            <i class=""></i>
            <p>
              Chi tiết giao
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" >
        <li class="nav-item">
          <a href="phieugiao.php" class="nav-link">
            <i class=""></i>
            <p>
              Phiếu giao
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php 

$connect = mysqli_connect('localhost','root','','qlphongmay');
$sql ="SELECT * FROM phongmay";
$query = mysqli_query($connect, $sql);
$phongmay ="";
$maphong="";
$tenphong ="";
$loaiphong ="" ;
$trangthai ="" ;


       if (isset($_POST["them"])) {
       	$maphong=$_POST["maphong"];
       	$tenphong=$_POST["tenphong"];
       	$magv=$_POST["magv"];
       	$trangthai=$_POST["trangthai"];

       	$sql = "INSERT INTO phongmay(maphong,tenphong,magv,trangthai) 
        VALUES ('$maphong','$tenphong','$magv','$trangthai') ";

            
        if (mysqli_query($connect, $sql)) {
          echo "
          <script type='text/javascript'>
           window.location='trangdanhsach.php';
           window.alert('Thêm thành công');
           </script> 

        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
 }

 ?>
           <form method="POST" action="">
              <div class="imgcontainer">
                <h1> Thêm phòng</h1>
              </div>
            
              <div class="container">
                <label for="uname"><b>mã phòng</b></label>
                <input type="text"  name="maphong">
            
                <label for="psw"><b>tên phòng</b></label>
                <input type="text" name="tenphong" >

                <label for="uname"><b>mã giảng viên</b></label>
                <input type="text" name="magv" >

                <label for="uname"><b>hoạt động</b></label>
                <input type="text"  name="trangthai" >
            
                <button type="submit" name="them" value="them">Thêm</button>
                
              </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>#</b> 
    </div>
    <strong><a href="https://adminlte.io"></a>Đăng Giang</strong>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/demo.js"></script>
</body>
</html>
