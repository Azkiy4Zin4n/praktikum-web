<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Pass By Value</title><!--Judul halaman web-->
</head>
<body>
<p><font color = "red" size = "3">pass by value</font></p><!--memberikan teks dengan efek warna dan pengaturan ukuran-->
<?php
function jumlah($value) //fungsi jumlah untuk melakukan proses
{
    $value++; //proses increment masukan
}
$input=8; //masukan nilai
jumlah($input); 
echo $input; //menampilkan hasil proses function
?>
</body>
</html>