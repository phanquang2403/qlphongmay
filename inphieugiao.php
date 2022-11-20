<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In phiếu giao</title>
    <link rel="stylesheet" type="text/css" href="css/inhoadon.css" />
<style>
.stt {
padding: 0px;
border: 0px;
width:10px;

}
</style>
</head>
<body onload="window.print();">
<body>
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="http://spktvinh.edu.vn/images/banner.png?version=4.2"/></div>
        
    </div>
  <br/>
  <div class="title">
       Danh sách giao vật vật tư 
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <table class="TableData">
    
      <th>STT</th>
      <th>Số phiếu giao</th>
      <th>Tên vật tư</th>
      <th>Số lượng giao</th>
      <th>Tình trạng vật tư</th>

    </tr>
        </table>


        <?php
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$sql="select * from chitietgiao";
$result=mysqli_query($connect,$sql);
$stt = 0;
while($row= mysqli_fetch_array($result))
{ ?>
<table align='' class='VatTu'>
    <tr>
<td width='60px' align='center'  ><div class='stt'> <?php echo ++$stt;?></div> </td>
<td width='230px'  align='left' > <?php echo $row['sophieugiao'];?></td>
<td width='160px'  align='center'><?php echo  $row['matv'];?></td>
<td width='228px'  align='center'><?php echo $row['soluonggiao'];?></td>
<td width='265px'  align='center'><?php echo $row['tinhtrangtb'];?></td>

</tr>
<?php } ?>

</table>


  <div class="footer-left"> Vinh, ngày 16 tháng 12 năm 2021<br/>
    Khách hàng </div>
  <div class="footer-right"> Vinh, ngày 16 tháng 12 năm 2021<br/>
    Nhân viên </div>
    <a href="chitietgiao.php">quay lại</a>
</div>
</body>
</html>