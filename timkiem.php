<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tìm kiếm vật tu</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <style>
    .sbox {
position: relative;
}
.stext {
width: 300px;
height: 50px;
background: #2b303b;
border: none;
font-size: 10pt;
float: left;
color: #fff;
padding-left: 45px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.fa-search {
position: absolute;
top: 0;
left: 0;
margin-left: 16px;
margin-top: 16px;
z-index: 1;
color: #fff;
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

                <h3 align="center" >Tìm kiếm vật tư</h3>
          <form align="center" action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Tìm kiếm">
</form>

<?php
$servername='localhost';
$username='root'; // User mặc định là root
$password='';
$dbname = "qlphongmay"; // Cơ sở dữ liệu
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Không thể kết nối Database:' .mysql_error());
}
    if(ISSET($_POST['submit'])){
        $keyword = $_POST['search'];
?>
<div>
    <h2 align="center" >Kết quả</h2>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM `thietbivt` WHERE `tenvt` LIKE '%$keyword%' ORDER BY `mavt`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
    <table border="1" align="center" cellspacing="0" cellspallding="5" width="750px">
    <tr>
                    <th>Mã vật tư</th>
                    <th>Mã phòng</th>
                    <th>Tên vật tư</th>
                    <th>Mã loại</th>
					          <th>Số lượng</th>
                </tr>
      <tr>
       <td><?php echo $fetch['mavt']?></td> 
        <td><?php echo $fetch['maphong']?></td>
        <td><?php echo $fetch['tenvt']?></td>
        <td><?php echo $fetch['maloai']?></td>
        <td><?php echo $fetch['soluong']?></td> 
        </tr>
        </table>
       
    <?php
        }
    ?>
</div>
<?php
    }
?>
            
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


