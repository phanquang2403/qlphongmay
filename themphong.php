
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
                    <th><label>mã phòng</label></th>
                    <th><label>tên phòng</label></th>
                    <th><label>mã GV</label></th>
                    <th><label>trạng thái</label></th>
                </tr>

	 <tr>
        <td><input type="text" name="maphong"></td>
	<td> <input type="text" name="tenphong"></td>
	<td><input type="text" name="magv"></td>
	<td> <input type="text" name="trangthai"></td>
	<td><input type="submit" name="them" value="them"></td>
</tr>
</table>