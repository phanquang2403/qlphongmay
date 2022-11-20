<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>quản lý phòng máy</title>
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
  </div>
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
</aside>

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          <?php 
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");


if (isset($_GET["id"])){
    $id = $_GET["id"];
  
  }
  if (isset($_POST["soluongxuat"])) {
    $slx=$_POST["soluongxuat"];
    $maxuong = $_POST["maxuong"];

  }


$sql ="SELECT * FROM thietbivt where id =$id ";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);
$slcotrongkho = $row['soluong'];
$tenvt = $row['tenvt'];
$date= date("Y-m-d H:i:s");
$nguoigiao = $row['tengv'];


if($slcotrongkho >= $slx){
$slconlai =$slcotrongkho - $slx;
$u ="UPDATE thietbivt SET soluong = $slconlai WHERE id = $id";
$run = mysqli_query($connect, $u);
$them = "INSERT INTO xuathoadon(tenvt,soluongtrongkho,soluongxuat) 
VALUES ('$tenvt','$slcotrongkho','$slx') ";
$run = mysqli_query($connect, $them);
$hd ="SELECT * FROM xuathoadon WHERE mahd=(SELECT MAX(mahd) FROM xuathoadon); "; 
$a = mysqli_query($connect, $hd);
     

// phieu giao

        $sqli =     " INSERT INTO phieugiao (ngaygiao, magv, maxuong) VALUES ('$date','$nguoigiao','$maxuong')";
        mysqli_query($connect,$sqli);

        
  // chi tiet giao    
  $s = "INSERT INTO chitietgiao ( matv, soluonggiao, tinhtrangtb)  
  VALUES ('$tenvt','$slx', 'moi') ";
  mysqli_query($connect,$s);
    echo "   <script>
    window.location='chitietgiao.php';
    window.alert('xuất thành công');
    </script>";


while ($row = mysqli_fetch_assoc($a)){



  echo "<h2>  HÓA ĐƠN XUẤT</h2>";

  ECHO "<table>
    <tr> ";
      echo "<th> Mã hóa đơn</th>";
      echo "<th> Tên vật tư</th>";
      echo "<th> Số lượng trong kho</th>";
      echo "<th> Số lượng xuất</th>";
      echo "<th> Ngày xuất</th>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>";
      echo $row ['mahd'];
      echo "</td>";
      echo "<td>";
      echo $row ['tenvt'];
      echo "</td>";
      echo "<td>";
      echo $row ['soluongtrongkho'];
      echo "</td>";
      echo "<td>";
      echo $row ['soluongxuat'];
      echo "</td>";
      echo "<td>";
      echo $row ['ngayxuat'];
      echo "</td>";
    echo "</tr>";
    echo "</table>";

     }}else{
        echo "   <script>
        
        
        window.location='xuatvattu.php?id=". $id."';
        window.alert('Số lượng xuất phải nhỏ hơn số lượng có trong kho');
     
    </script>";
     
     }

?>
<a href="inhoadon.php">Xuất hóa đơn </a>
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



