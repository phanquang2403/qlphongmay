<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$sql ="SELECT * FROM phongmay";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query)
?>

<?php 

$connect = mysqli_connect('localhost','root','','qlphongmay');
$sql ="SELECT * FROM thietbiVT";
$query = mysqli_query($connect, $sql);
$phongmay ="";
$mavt="";
$tenvt ="";
$maloai ="" ;
$soluong ="" ;
$ngaynhap="";

       if (isset($_POST["them"])) {
		$mavt=$_POST["mavt"];
		$tenvt=$_POST["tenvt"];
		$maloai=$_POST["maloai"];
		$soluong=$_POST["soluong"];
		$ngaynhap=$_POST["ngaynhap"];
		

       	$sql = "INSERT INTO thietbiVT(mavt,tenvt,maloai,soluong,ngaynhap) 
        VALUES ('$mavt','$tenvt','$maloai','$soluong','$ngaynhap') ";

            
        if (mysqli_query($connect, $sql)) {
        echo "   <script>
        window.alert('Thêm thành công');
     
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
 }

 ?>
<table border="1" text align="center">
<form method="POST" action="">
    <tr>
                    <th><label>mã vật tư</label></th>
                    <th><label>tên vật tư</label></th>
                    <th><label>mã loại</label></th>
                    <th><label>số lượng</label></th>
					<th><label>ngày nhập</label></th>
                    <th><label>thêm vật tư</label></th>
                </tr>
	 <tr>
    <td><input type="text" name="mavt"></td>
	<td> <input type="text" name="tenvt"></td>
	<td><input type="text" name="maloai"></td>
	<td> <input type="text" name="soluong"></td>
	<td><input type="text" name="ngaynhap"></td>
	<td><input type="submit" name="them" value="them"></td>
</tr>
<!-- hiển thị  -->
</table>

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
                    <th>tên vật tư</th>
                    <th>mã loai</th>
                    <th>soluong</th>
					<th>ngaynhap</th>
					<th>sửa</th>
					<th>xuất</th>
					
                    
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
                                <td> <a href="suavt.php?id=<?php echo $row['id']; ?>">sửa</a></td>
                                <td> <a href="xuat.php?id=<?php echo $row['id']; ?>">xuất</a></td>
                            </tr>
                            <?php } ?>
            
        </table>
</body>
</html>