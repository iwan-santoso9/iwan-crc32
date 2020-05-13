<?php 
$namaFile = explode('\\', __FILE__);
print_r('Nama File : '.(end($namaFile)));
echo "\n"; 
echo "Masukkan Heksa :";
$x = trim(fgets(STDIN));
$checksum = crc32($x);
printf('Output Heksa : '."%x\n", $checksum); 
 ?>