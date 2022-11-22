
    <select class='fullWidth customSelect' name="mavt" id="name_prod">

<?php 

    $i=$_POST['value'];
    if(isset($i)){

    $connect = mysqli_connect ('localhost','root','','qlphongmay') or die("lỗi");
    $sql ="SELECT * FROM `thietbivt` where maloai='$i'";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($query)){
    ?>
        <option value=<?php echo $row['mavt'] ?>><?php echo $row['tenvt'] ?></option>
    <?php } }?>


</select>