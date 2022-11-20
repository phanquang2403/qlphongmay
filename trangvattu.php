<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>trang vật tư</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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

.box-add-prod{
  
}

.btn-add-prod{
    margin-top:1rem;
    padding: 8px 15px;
    border-radius: 8px;
}

.add_product{
    border:1px solid red;
    border-radius: 8px;
    padding: 1rem 4rem;
    width: max-content;
    margin-top:1rem;
    display:none;

}

.form-box{
    display: flex;
    flex-direction: column;
    width: 50rem;
}

.wrapper-btn{
    margin-top: 1rem;
    
}

.btn-form{
        padding: 8px 15px;
        border-radius: 8px;
        margin: 0 0.5rem;
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
            <div class="box-add-prod">
            <button class='btn-add-prod'>Nhập vật tư</button>

            <div class='add_product'>
                <form action="trangvattu.php" method='post' >
                   
                    <div class="form-box">
                        <label for="name_prod">Tên vật tư</label>
                        <input name='name_prod' type="text" id='name_prod'>
                    </div>

                    <div class="form-box">
                        <label for="code_prod">Mã mã loại</label>
                        <select name="code_prod" id="code_prod">
                        <?php 
                            $connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
                            $sql ="SELECT * FROM `loaitbvt`";
                            $query = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_assoc($query)){

                        ?>
                            <option value=<?php echo $row['maloai'] ?>><?php echo $row['tenloai'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-box">
                        <label for="count_prod">Số lượng</label>
                        <input name='count_prod' type="text" id='count_prod'>
                    </div>
                    <div class="wrapper-btn">
                        <button class='btn-form' name='add_prod_btn' type="submit">Thêm sản Phẩm</button>
                        <button class='btn-form' type="">Huỷ bỏ</button>
                    </div>

                    <?php 
                        if(isset($_POST['add_prod_btn'])){

                            if(!empty($_POST['name_prod']) &&  !empty($_POST['count_prod'])){

                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $date       =   date("Y-m-d H:i:s");
                                $mahang     =   'MH'.str_replace(':','',str_replace('-','',str_replace(' ', '', $date)));
                                $name = $_POST['name_prod'];
                                $code = $_POST['code_prod'];
                                $count  =$_POST['count_prod'];


                                $sql        ="INSERT INTO `thietbivt` (`mavt`,`maphong`,`tenvt`, `maloai`, `soluong`,`ngaynhap`,tengv) VALUES ('$mahang','maphong1','$name','$code',$count,'$date','Bình giang')";
                                $kq =    mysqli_query($connect,$sql);
                                if($kq){
                                    echo "
                                    <script type='text/javascript'>               
                                        alert(' Nhập hàng thành công'); 
                                    </script>
                                    ";  
                                }else{
                                    echo "
                                    <script type='text/javascript'>               
                                        alert(' Nhập hàng không thành công'); 
                                        
                                    </script>
                                    ";  
                                }
                        }

                        }
                    ?>
                    
                </form>
                
            </div>
            </div>



          <?php 
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$sql ="SELECT * FROM thietbiVT";
$query = mysqli_query($connect, $sql);
?>


<h2 text align="center">Danh sách vật tư</h2>
<div>
 <table border="1" text align="center"> 
                <tr>
                    <th>Mã vật tư</th>
                    <th>Tên vật tư</th>
                    <th>Mã loai</th>
                    <th>Số lượng</th>
					          <th>Ngày nhập</th>
					          <th>Sửa</th>
                    <th>Xóa</th>
					          <th>Xuất</th>
                    <th>IN FILE</th>
					
                    
                </tr>
                            <?php 
                                while ($row = mysqli_fetch_assoc($query)){
                                 ?>
                             <tr>
                                <td><?php echo $row['mavt'];?></td>
                                <td><?php echo $row['tenvt'];?></td>
                                <td><?php echo $row['maloai'];?></td>
                                <td><?php echo $row['soluong'];?></td>
								                <td><?php echo $row['ngaynhap'];?></td>
                                <td> <a href="trangsuavt.php?id=<?php echo $row['id']; ?>">sửa</a></td>
                                <td> <a href="xuat.php?id=<?php echo $row['id']; ?>">xóa</a></td>
                                <td> <a href="trangxuatvattu.php?id=<?php echo $row['id']; ?>">xuất</a></td>
                                <td> <a href="indanhsachvt.php" ><i class="fas fa-print"></i></td>
                            </tr>
                            <?php } ?>
                            
        </table>
          <h3 align="center" >phòng máy </h3>
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
        $query = mysqli_query($conn, "SELECT * FROM `thietbivt` WHERE `maphong` LIKE '%$keyword%' ORDER BY `mavt`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
     <table border="1" text align="center"> 
                <tr>
                    <th>Mã phòng</th>
                    <th>Mã vật tư</th>
                    <th>Tên vật tư</th>
                    <th>Mã loại</th>
					          <th>Số lượng</th>
                </tr>
      <tr>
       <td><?php echo $fetch['maphong']?></td> 
        <td><?php echo $fetch['mavt']?></td>
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

<script>
    let box_add =  document.querySelector('.add_product')
    let btnAddProd =  document.querySelector('.btn-add-prod')

    btnAddProd.addEventListener("click", () => {
        console.log(1)
        box_add.style.display= 'block';
    });
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/demo.js"></script>
</body>
</html>

