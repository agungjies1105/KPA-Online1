<?php 
   $data1= $_POST['data1'];
   //Operasi Penjumlahan
   $devfaren=32;
   $total = ($data1*1.8) + $devfaren;
   echo $total; echo "F";

   if ($total==93.2) {
   	echo "Anda Sehat...!";
   } elseif ($total<93.2) {
   	echo "Anda Kedinginan";
   } elseif ($total>100) {
   	echo "Anda Sakit Parah";
   } else {
   	echo "Anda Sakit";
   }
Perubahan Saga
?>