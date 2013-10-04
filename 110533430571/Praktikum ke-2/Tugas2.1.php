<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tabel Otomatis</title><!--Judul halaman web-->
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 610px; //posisi dari tombol generate dan reset
top: 80px;   //posisi dari tombol generate dan reset
}
.style1 {
//color: red;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="Tugas2.2.php"> <!--//menghubungkan dengan Tugas2.2.php-->
<h2 align="center" class="style1"><font color = "red">Tabel Fleksibel</font></h2> <!--pemberian efek warn pada teks dn posisi teks-->
<div align="center"> <!--posisi dari table masukan-->
<table width="230" border="1" bgcolor = "blue"><!--efek warna, ukuran, lebar border pada table-->

<tr>
<td style="text-align:center"><label><font color = "white">Kolom</font></label></td> <!--pemberian efek warna, posisi teks-->
<td><strong> </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><font color = "white">Sel Total</font></td>
<td><strong> </strong>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>

<input type="submit" name="Generate" value="Generate"> <!--pemberian nama pada tombol-->
<input type="reset" name="Reset" value="Reset"> <!--pemberian nama pada tombol-->
</div>
</form>
</body>

</html>