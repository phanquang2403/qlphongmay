<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In vật tư</title>
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
       Danh sách vật tư có trong kho
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <table class="TableData">
  <tr>
                <td colspan="4" align='center' bgcolor="#66FFFF"  > <h4 id="Tieude">Danh sách các vật tư có trong kho </h4></td>
            </tr>
    <tr>
    
      <th style="width:70px;">STT</th>
      <th>Tên vật tư</th>
      <th>Loại</th>
      <th style="width:70px;">Số lượng tồn kho</th>

    </tr>
        </table>


        <?php
$connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
$sql="select * from thietbivt";
$result=mysqli_query($connect,$sql);
$stt = 0;
while($row= mysqli_fetch_array($result))
{ ?>
<table align='' class='VatTu'>
    <tr>
<td width='70px' align='center'  ><div class='stt'> <?php echo ++$stt;?></div> </td>
<td width='555px'  align='left' > <?php echo $row['tenvt'];?></td>
<td width='245px'  align='center'><?php echo  $row['maloai'];?></td>
<td width='75px'  align='center'><?php echo $row['soluong'];?></td>

</tr>
<?php } ?>

</table>


  <div class="footer-left"> Vinh, ngày 16 tháng 12 năm 2021<br/>
    Khách hàng </div>
  <div class="footer-right"> Vinh, ngày 16 tháng 12 năm 2021<br/>
    Nhân viên </div>
</div>
</body>
</html>