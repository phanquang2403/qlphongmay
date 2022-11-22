<?php
$connect = mysqli_connect('localhost','root','','qlphongmay');
date_default_timezone_set('Asia/Ho_Chi_Minh');
       if (isset($_POST["them"])) {
            $mavt=$_POST["mavt"];
        

            $tenvt=$_POST["mavt"];
            $maloai=$_POST["maloai"]; 
            $soluong=$_POST["soluong"];
            $t_maphong = $_POST["maphong"];      
            $nguoigiao = $_POST['magv']; 
            $date= date("Y-m-d H:i:s");
            $r="select * from thietbivt where mavt = '$mavt'";

            $mavattu=mysqli_query($connect,$r);
            $tenvattu =mysqli_fetch_assoc($mavattu)['tenvt'];


            $other_ship = "SELECT * FROM `giangvien` where magv='$nguoigiao'";
            $query_ship_order=mysqli_query($connect,$other_ship);
            $data_ship =mysqli_fetch_assoc($query_ship_order)['tengv'];
            echo $data_ship;

            if( $b=mysqli_num_rows($mavattu)<=0){
           
           
                    echo "   <script>
               
                    window.location='trangdanhsach.php';
                    window.alert('vật tư này chưa tồn tại!');
                
                 </script>";
        

    
        }  else{
            $sqlUpdate ="UPDATE `thietbivt` SET `mavt`='$mavt',`maphong`='$t_maphong',`tenvt`='$tenvattu',`maloai`='$maloai',`soluong`=soluong + $soluong,`tengv`='$data_ship',`ngaynhap`='$date' WHERE mavt='$mavt'";
            $a = mysqli_query($connect,$sqlUpdate);
            
            
            
            
            //phieunhan
            echo $sqlUpdate;
            $sqli = "INSERT INTO phieunhan (ngaynhan, nguoigiao) 
            VALUES ('$date','$data_ship') ";
            mysqli_query($connect,$sqli);
    
            //chitiet nhan
                
                $r = "INSERT INTO chitietnhan ( tenvt, Soluongnhan, trinhtangvattu) 
                VALUES ('$tenvattu','$soluong', 'moi') ";
            mysqli_query($connect,$r);
            echo "   <script>
            
            
            window.location='chitietnhan.php';
            window.alert('Thêm thành công');
         
            </script>";
  
        }
      
    }