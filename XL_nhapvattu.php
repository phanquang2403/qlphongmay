<?php
$connect = mysqli_connect('localhost','root','','qlphongmay');
date_default_timezone_set('Asia/Ho_Chi_Minh');
       if (isset($_POST["them"])) {
            $mavt=$_POST["mavt"];
        

            $tenvt=$_POST["tenvt"];
            $maloai=$_POST["maloai"];
            $soluong=$_POST["soluong"];
            $t_maphong = $_POST["maphong"];      
            $nguoigiao = $_POST['tengv'];
            $date= date("Y-m-d H:i:s");
            $r="select * from thietbivt where mavt = '$mavt'";
            $mavattu=mysqli_query($connect,$r);
            $a = mysqli_fetch_array($mavattu);
        if( $a['mavt'] != null){
           
           
                    echo "   <script>
               
                    window.location='trangdanhsach.php';
                    window.alert('Mã vật tư trùng nhau!');
                
            //     </script>";
        

    
        }  else{
            $sql = "INSERT INTO thietbivt (mavt, maphong, tenvt,maloai,soluong,tengv,ngaynhap) 
            VALUES ('$mavt','$t_maphong','$tenvt','$maloai','$soluong','$nguoigiao','$date') ";
            
            //phieunhan
            $sqli = "INSERT INTO phieunhan (ngaynhan, nguoigiao) 
            VALUES ('$date','$nguoigiao') ";
            mysqli_query($connect,$sqli);
    
            //chitiet nhan
                
                $r = "INSERT INTO chitietnhan ( tenvt, Soluongnhan, trinhtangvattu) 
                VALUES ('$tenvt','$soluong', 'moi') ";
            mysqli_query($connect,$r);
            echo "   <script>
            
            
            window.location='chitietnhan.php';
            window.alert('Thêm thành công');
         
            </script>";
  
        }
      
    }