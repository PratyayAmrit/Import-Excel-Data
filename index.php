<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'dailydata');
$empty_table = "TRUNCATE TABLE data" ;
mysqli_query($con , $empty_table);
    require('PHPExcel/PHPExcel.php');
    require('PHPExcel/PHPExcel/IOFactory.php');

$url        =  'https://www.ccilindia.com/Research/Statistics/Lists/DailyDataForInfoVendors/Attachments/3091/DFIV_09_07_2021.zip' ;

$file_name  =   basename($url); 
 
header ('Daily Data') ; 
if(file_put_contents( $file_name,file_get_contents($url))){
    echo "File downloaded successfully!"; 
}else{
    echo "File downloading failed!"; 
}


$zip = new ZipArchive;
  
if ($zip->open('DFIV_09_07_2021.zip') === TRUE) {
  
    $zip->extractTo("upload");
    $zip->close();
} 


   $file = "upload/CCIL01.xls";
   $reader = PHPExcel_IOFactory::createReaderForFile($file);
   $obj = $reader->load($file);
   $sheet = $obj->getSheet('0');

   foreach($obj->getworksheetiterator() as $sheet) {
  $gethighestrow = $sheet->getHighestRow() ;
 
  for($i=2;$i<=$gethighestrow;$i++) {
$Date = date("d-m-y" , strtotime($sheet->getCellByColumnAndRow($i,1)->getValue()));
$a1 = $sheet->getCellByColumnAndRow($i, 2)->getValue();
$a2 = $sheet->getCellByColumnAndRow($i, 3)->getValue();
$a3 = $sheet->getCellByColumnAndRow($i,4)->getValue();
$a4 = $sheet->getCellByColumnAndRow($i,5)->getValue();
$a5 = $sheet->getCellByColumnAndRow($i,6)->getValue(); 
$a6 = $sheet->getCellByColumnAndRow($i,7)->getValue();
$a7 = $sheet->getCellByColumnAndRow($i,8)->getValue();
$a8 = $sheet->getCellByColumnAndRow($i,9)->getValue();
$a9 = $sheet->getCellByColumnAndRow($i,10)->getValue();
$a10 = $sheet->getCellByColumnAndRow($i,11)->getValue();
$a11 = $sheet->getCellByColumnAndRow($i,12)->getValue();
$a12 = $sheet->getCellByColumnAndRow($i,13)->getValue();
$a13 = $sheet->getCellByColumnAndRow($i,14)->getValue();
$a14 = $sheet->getCellByColumnAndRow($i,15)->getValue();
$a15 = $sheet->getCellByColumnAndRow($i,16)->getValue();
$a16 = $sheet->getCellByColumnAndRow($i,17)->getValue();
$a17 = $sheet->getCellByColumnAndRow($i,18)->getValue();
$a18 = $sheet->getCellByColumnAndRow($i,19)->getValue();
$a19 = $sheet->getCellByColumnAndRow($i,20)->getValue();
$a20 = $sheet->getCellByColumnAndRow($i,21)->getValue();
$a21 = $sheet->getCellByColumnAndRow($i,22)->getValue();
$a22 = $sheet->getCellByColumnAndRow($i,23)->getValue();
$a23 = $sheet->getCellByColumnAndRow($i,24)->getValue();
$a24 = $sheet->getCellByColumnAndRow($i,25)->getValue();
$a25 = $sheet->getCellByColumnAndRow($i,26)->getValue();
$a26 = $sheet->getCellByColumnAndRow($i,27)->getValue();
$a27 = $sheet->getCellByColumnAndRow($i,28)->getValue();
$a28 = $sheet->getCellByColumnAndRow($i,29)->getValue();
$a29 = $sheet->getCellByColumnAndRow($i,30)->getValue();
$a30 = $sheet->getCellByColumnAndRow($i,31)->getValue();
$a31 = $sheet->getCellByColumnAndRow($i,32)->getValue();
$a32 = $sheet->getCellByColumnAndRow($i,33)->getValue();
$a33 = $sheet->getCellByColumnAndRow($i,34)->getValue();
$a34 = $sheet->getCellByColumnAndRow($i,35)->getValue();
$a35 = $sheet->getCellByColumnAndRow($i,36)->getValue();
$a36 = $sheet->getCellByColumnAndRow($i,37)->getValue();
$a37 = $sheet->getCellByColumnAndRow($i,38)->getValue();
$a38 = $sheet->getCellByColumnAndRow($i,39)->getValue();
$a39 = $sheet->getCellByColumnAndRow($i,40)->getValue();
$a40 = $sheet->getCellByColumnAndRow($i,41)->getValue();
$a41 = $sheet->getCellByColumnAndRow($i,42)->getValue();
$a42 = $sheet->getCellByColumnAndRow($i,43)->getValue();
$a43 = $sheet->getCellByColumnAndRow($i,44)->getValue();
$a44 = $sheet->getCellByColumnAndRow($i,45)->getValue();
$a45 = $sheet->getCellByColumnAndRow($i,46)->getValue();
$a46 = $sheet->getCellByColumnAndRow($i,47)->getValue();
$a47 = $sheet->getCellByColumnAndRow($i,48)->getValue();
$a48 = $sheet->getCellByColumnAndRow($i,49)->getValue();
$a49 = $sheet->getCellByColumnAndRow($i,50)->getValue();
$a50 = $sheet->getCellByColumnAndRow($i,51)->getValue();
$a51 = $sheet->getCellByColumnAndRow($i,52)->getValue();
$a52 = $sheet->getCellByColumnAndRow($i,53)->getValue();
$a53 = $sheet->getCellByColumnAndRow($i,54)->getValue();
$a54 = $sheet->getCellByColumnAndRow($i,55)->getValue();
$a55 = $sheet->getCellByColumnAndRow($i,56)->getValue();
$a56 = $sheet->getCellByColumnAndRow($i,57)->getValue();
$a57 = $sheet->getCellByColumnAndRow($i,58)->getValue();
$a58 = $sheet->getCellByColumnAndRow($i,59)->getValue();
$a59 = $sheet->getCellByColumnAndRow($i,60)->getValue();
$a60 = $sheet->getCellByColumnAndRow($i,61)->getValue();
$a61 = $sheet->getCellByColumnAndRow($i,62)->getValue();
$a62 = $sheet->getCellByColumnAndRow($i,63)->getValue();
$a63 = $sheet->getCellByColumnAndRow($i,64)->getValue();
$a64 = $sheet->getCellByColumnAndRow($i,65)->getValue();
$a65 = $sheet->getCellByColumnAndRow($i,66)->getValue();
$a66 = $sheet->getCellByColumnAndRow($i,67)->getValue();
$a67 = $sheet->getCellByColumnAndRow($i,68)->getValue();
$a68 = $sheet->getCellByColumnAndRow($i,69)->getValue();
$a69 = $sheet->getCellByColumnAndRow($i,70)->getValue();
$a70 = $sheet->getCellByColumnAndRow($i,71)->getValue();
$a71 = $sheet->getCellByColumnAndRow($i,72)->getValue();
$a72 = $sheet->getCellByColumnAndRow($i,73)->getValue();
$a73 = $sheet->getCellByColumnAndRow($i,74)->getValue();
$a74 = $sheet->getCellByColumnAndRow($i,75)->getValue();
$a75 = $sheet->getCellByColumnAndRow($i,76)->getValue();
$a76 = $sheet->getCellByColumnAndRow($i,77)->getValue();
$a77 = $sheet->getCellByColumnAndRow($i,78)->getValue();
$a78 = $sheet->getCellByColumnAndRow($i,79)->getValue();
$a79 = $sheet->getCellByColumnAndRow($i,80)->getValue();
$a80 = $sheet->getCellByColumnAndRow($i,81)->getValue();
  if($Date!=''){
  $mysqli_insert = "INSERT INTO `data` (`Date`, `0.50`, `1.00`, `1.50`, `2.00`, `2.50`, `3.00`, `3.50`, `4.00`, `4.50`, `5.00`, `5.50`, `6.00`, `6.50`, `7.00`, `7.50`, `8.00`, `8.50`, `9.00`, `9.50`, `10.00`, `10.50`, `11.00`, `11.50`, `12.00`, `12.50`, `13.00`, `13.50`, `14.00`, `14.50`, `15.00`, `15.50`, `16.00`, `16.50`, `17.00`, `17.50`, `18.00`, `18.50`, `19.00`, `19.50`, `20.00`, `20.50`, `21.00`, `21.50`, `22.00`, `22.50`, `23.00`, `23.50`, `24.00`, `24.50`, `25.00`, `25.50`, `26.00`, `26.50`, `27.00`, `27.50`, `28.00`, `28.50`, `29.00`, `29.50`, `30.00`, `30.50`, `31.00`, `31.50`, `32.00`, `32.50`, `33.00`, `33.50`, `34.00`, `34.50`, `35.00`, `35.50`, `36.00`, `36.50`, `37.00`, `37.50`, `38.00`, `38.50`, `39.00`, `39.50`, `40.00`) Values
('$Date' , '$a1' , '$a2' , '$a3' , '$a4' , '$a5' , '$a6' , '$a7' , '$a8' , '$a9' , '$a10' , '$a11' , '$a12' , '$a13' , '$a14' , '$a15' , '$a16' , '$a17' , '$a18' , '$a19' , '$a20' , '$a21' , '$a22' , '$a23' , '$a24' , '$a25' , '$a26' , '$a27' , '$a28' , '$a29' , '$a30' , '$a31' , '$a32' , '$a33' , '$a34' , '$a35' , '$a36' , '$a37' , '$a38' , '$a39' , '$a40' , '$a41' , '$a42' , '$a43' , '$a44' , '$a45' , '$a46' , '$a47' , '$a48' , '$a49' , '$a50' , '$a51' , '$a52' , '$a53' , '$a54' , '$a55' , '$a56' , '$a57' , '$a58' , '$a59' , '$a60' , '$a61' , '$a62' , '$a63' , '$a64' , '$a65' , '$a66' , '$a67' , '$a68' , '$a69' , '$a70' , '$a71' , '$a72' , '$a73' , '$a74' , '$a75' , '$a76' , '$a77' , '$a78' , '$a79' , '$a80')" ;
  mysqli_query($con, $mysqli_insert) OR die(mysqli_error($con));
}
}
}
echo "<pre>" ;
echo "Data Imported To Database Successfully";
?>
