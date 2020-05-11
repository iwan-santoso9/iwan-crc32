<?php
require 'angka-hexsa.php';

$checksum = crc32($x);
$namaFile = explode('\\', __FILE__);
print_r('Nama File : '.(end($namaFile)));
echo "\n"; 
print_r('Input Heksa : '.$x);
echo "\n"; 
printf('Output Heksa : '."%x\n", $checksum); 
?>