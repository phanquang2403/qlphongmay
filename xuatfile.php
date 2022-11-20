<?php
  $objPHPExcel = new PHPExcel();
  $query1 = "SELECT * FROM phongmay ";
  $exec1 = mysql_query($query1) or die ("Error in Query1".mysql_error());
  $serialnumber=0;
  //Set header with temp array
  $tmparray =array("Sr.Number","Employee Login","Employee Name");
  //take new main array and set header array in it.
  $sheet =array($tmparray);

  while ($res1 = mysql_fetch_array($exec1))
  {
    $tmparray =array();
    $serialnumber = $serialnumber + 1;
    array_Push($tmparray,$serialnumber);
    $employeelogin = $res1['employeelogin'];
    array_Push($tmparray,$employeelogin);
    $employeename = $res1['employeename'];
    array_Push($tmparray,$employeename);   
    array_Push($sheet,$tmparray);
  }
   header('Content-type: application/vnd.ms-Excel');
   header('Content-Disposition: attachment; filename="name.xlsx"');
  $worksheet = $objPHPExcel->getActiveSheet();
  foreach($sheet as $row => $columns) {
    foreach($columns as $column => $data) {
        $worksheet->setCellValueByColumnAndRow($column, $row + 1, $data);
    }
  }

  //make first row bold
  $objPHPExcel->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold(true);
  $objPHPExcel->setActiveSheetIndex(0);
  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
  $objWriter->save(str_replace('.php', '.xlsx', __FILE__));
?>