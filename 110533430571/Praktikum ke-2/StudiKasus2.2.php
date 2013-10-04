<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Generate Tabel</title><!--Judul halaman WEB-->
</head>
<body>
<div align="center">


<?php $rows = (int) $_POST["JumlahRow"]; ?>
<?php $columns = (int) $_POST["JumlahColum"]; ?>

<h2 align="center" class="style1"><font color = "red">Tampilan Tabel</font></h2>
<strong>Anda Memasukkan</strong> <?php echo $rows; ?> <em>baris</em><br /> <!--menangkap dan menampikan masukan baris-->
<strong>Anda Memasukkan</strong> <?php echo $columns; ?> <em>kolom</em><br /> <!--menangkap dan menampikan masukan kolom-->

<br />
<br />
<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
//pengulangan baris
for($i=1; $i<=$rows; $i++) //membuat pengulangan baris sebanyak nilai yang dimasukkan dalam kolom rows
//akhir pengulangan baris
{
echo "<tr>"; //mencetak baris (tag pembuka)

//disini mulai pengulangan kolom
for($j=1; $j<=$columns; $j++) //membuat pengulangan kolom sebanyak nilai pada kolom columns
{
echo "<td>$j </br> $i</td>"; //mencetak kolom tabel
} //akhir pengulangan kolom

echo "</tr>"; //mencetak baris (tag penutup)
}
	echo "</table>";
	?>
</div>
</body>
</html>
