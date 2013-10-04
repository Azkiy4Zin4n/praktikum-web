<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Generate Table</title><!--Judul Halaman WEB-->
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 610px;   //posisi dari tombol generate dan reset
top: 70px;     //posisi dari tombol generate dan reset
}
.style1 {
//color: red;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="StudiKasus2.2.php"><!--//menghubungkan dengan StudiKasus2.2.php-->
<h2 align="center" class="style1"><font color = "red">Masukkan Jumlah Baris dan Kolom</font></h2><!--pemberian efek warn pada teks dn posisi teks-->
<div align="center"> <!--posisi dari table masukan-->
<table width="230" border="1" bgcolor = "blue"><!--efek warna, ukuran, lebar border pada table-->
<tr>
<td width="60" style="text-align:center"><font color = "white">Baris</font></td><!--pemberian efek warna, posisi teks-->
<td width="60"><strong> </strong>
<input name="JumlahRow" type="text" id="JumlahRow" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><label><font color = "white">Kolom</font></label></td>
<td><strong> </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>
<input type="submit" name="Generate" value="Generate"><!--pemberian nama pada tombol-->
<input type="reset" name="Reset" value="Reset"><!--pemberian nama pada tombol-->
</div>
</form>
</body>
<script language="JavaScript" type="text/javascript">
<!--
function getmax() {
var R = parseInt(document.getElementById('JumlahRow').value);<!--mengambil nilai masukan dengan id 'JumlahRow'-->
var C = parseInt(document.getElementById('JumlahColum').value);<!--mengambil nilai masukan dengan id 'JumlahRow'-->
//var X = parseInt(document.getElementById('JumlahCell').value);
//var cellmax = document.getElementById('maxcells');
//var total = 'N/A';
//X = R * C;
//cellmax.value = new String(total);

}
//-->
</script>
</html>