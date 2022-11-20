<!-- lệnh kết nối  -->
<?php 
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$sql ="SELECT * FROM phongmay";
$query = mysqli_query($connect, $sql);


?>
<h2>Danh sách phòng máy</h2>
<div>
 <table border="1"> 
                <tr>
                    <th>Mã Phòng</th>
                    <th>tên phòng</th>
                    <th>loại phòng</th>
                    <th>trạng thái</th>
                    <th> <a href="themphong.php?id=123">Thêm</a></th>
                    
                </tr>
                            <?php 
                                while ($row = mysqli_fetch_assoc($query)){
                                   ?> 

                             <tr>
                                <td><?php echo $row['maphong'];?></td>
                                <td><?php echo $row['tenphong'];?></td>
                                <td><?php echo $row['magv'];?></td>
                                <td><?php echo $row['trangthai'];?></td>
                                <td><a href="sua.php?id=<?php echo $row['id']; ?>">sửa</a> | <a href="xoa.php?id=<?php echo $row['id']; ?>">xóa |<a href="themmay.php?id='<?php echo $row['id']; ?>'">Thêm</a></td>
                                
                            </tr>
                            <?php } ?>
            
        </table>
    
