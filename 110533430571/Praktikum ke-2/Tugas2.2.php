<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Generate Tabel</title>
</head>
<body>
<div align="center"> <!--posisi dari table masukan-->
<?php
//$rows = 1;
$columns = 1;
$cells = 1;
?>

<?php //$rows = (int) $_POST["JumlahRow"]; ?>
<?php $columns = (int) $_POST["JumlahColum"]; ?>
<?php $cells = (int) $_POST["JumlahCell"]; ?>

<h2 align="center" class="style1"><font color = "red">Tabel Fleksibel</font></h2><!--pemberian efek warn pada teks dn posisi teks-->
<strong>Anda Memasukkan</strong> <?php echo $columns; ?> <em>kolom,</em><br /><!--menangkap nilai masukan awal kolom-->
<strong>Anda Memasukkan</strong> <?php echo $cells; ?> <em>sel,</em><br /> <!--menangkap nilai masukan awal sel-->

<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
$cel = 1;
while ($cel <= $cells)
{
	echo "<tr>"; //cetak baris
	$cl = 0;
	while ($cl < $columns)
	{
		if ($cel <= $cells)//kondisi if untuk perulangan
		{
		echo "<td><div align=center>".$cel."</div></td>"; //proses mencetak kolom
		$cel++; //increment untuk sampai batas maksimal masukan, yang akan digunakan untuk proses perulangan pembuatan baris
		}
	$cl++;
	}
	echo "</tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
