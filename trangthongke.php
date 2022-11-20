<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang thống kê</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <style>
    
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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

          

          <?php 
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$ba ="SELECT SUM(soluong) FROM thietbivt where tenvt = 'bàn ghế' ";
$ch ="SELECT SUM(soluong) FROM thietbivt where tenvt = 'chuột' ";
$abc ="SELECT SUM(soluong) FROM thietbivt where tenvt = 'ram' ";
 $sql ="SELECT SUM(soluong) FROM thietbivt where tenvt = 'máy tính' ";
 $bp ="SELECT SUM(soluong) FROM thietbivt where tenvt = 'bàn phím' ";
 $sqli ="SELECT SUM(soluong) FROM thietbivt ";

 $ban = mysqli_query($connect, $ba);
 $ba = mysqli_fetch_assoc($ban);

 $chuot = mysqli_query($connect, $ch);
 $c = mysqli_fetch_assoc($chuot);

 $rame = mysqli_query($connect, $abc);
 $rm = mysqli_fetch_assoc($rame);

 $query = mysqli_query($connect, $sql);
 $row = mysqli_fetch_assoc($query);

 $banphim = mysqli_query($connect, $bp);
 $bb = mysqli_fetch_assoc($banphim);

 $b = mysqli_query($connect, $sqli);
 $r = mysqli_fetch_assoc($b);

 echo "<h2>Thống kê vật tư</h2>";

 ECHO "<table>
   <tr> ";
     echo "<th> Số bàn ghế </th>";
     echo "<th> Số Chuột </th>";
     echo "<th> Số máy tính </th>";
     echo "<th> Số bàn phím </th>";
     echo "<th> Số ram </th>";
     echo "<th> Tổng all thiết bị </th>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>";
     echo $ba['SUM(soluong)'];
     echo "</td>";
     echo "<td>";
     echo $c['SUM(soluong)'];
     echo "<td>";
     echo $row['SUM(soluong)'];
     echo "</td>";
     echo "<td>";
     echo $bb['SUM(soluong)'];
     echo "</td>";
     echo "<td>";
     echo $rm['SUM(soluong)'];
     echo "</td>";
     echo "<td>";
     echo $r['SUM(soluong)'];
     echo "</td>";
   echo "</tr>";
   echo "</table>";
             

?>
<?php
echo "Tổng số lượng chuột: ".$c['SUM(soluong)']."<br/>";
 echo "Tổng số lượng ram: ".$rm['SUM(soluong)']."<br/>";
 echo "Tổng số lượng máy tính: ".$row['SUM(soluong)']."<br/>";
 echo "Tổng số lượng bàn phím: ".$bb['SUM(soluong)']."<br/>";
 echo "Tổng tất cả các thiết bị: ".$r['SUM(soluong)'];
    ?>

                
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


