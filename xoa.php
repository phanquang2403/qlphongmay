<?php 
         $connect = mysqli_connect('localhost','root','','qlphongmay');
         $sql ="SELECT * FROM phongmay";

            if (isset($_GET["id"])){
      	$id = $_GET["id"];
            if (mysqli_query($connect, $sql)) {
                  echo "
                  <script type='text/javascript'>
                   window.location='trangdanhsach.php';
                   window.alert('Xóa thành công');
                   </script> 

                ";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
              }
      }
?>
<?php
      $sql = "DELETE FROM phongmay WHERE id = $id";
      $qr = mysqli_query($connect,$sql);
      //header("location:danhsach.php");
?>