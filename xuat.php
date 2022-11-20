<?php 
         $connect = mysqli_connect('localhost','root','','qlphongmay');
         $sql ="SELECT * FROM thietbiVT";

            if (isset($_GET["id"])){
      	$id = $_GET["id"];
      }
?>
<?php
      $sql = "DELETE FROM thietbiVT WHERE id = $id";
      $qr = mysqli_query($connect,$sql);
      if (mysqli_query($connect, $sql)) {
            echo "
       		  <script type='text/javascript'>
       		   window.location='trangvattu.php';
       		   window.alert('Xóa thành công');
       		   </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
?>