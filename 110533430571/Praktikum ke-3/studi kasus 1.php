<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Seleksi</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Status :
		<select name="saudara">
			<option value="Kakak"
			<?php
				if(@$_POST['saudara'] == "Anda adalah seorang Kakak"){ 
					echo 'selected=selected';
				}
			?>
			>Kakak <!--memproses apakah yang dipilih "Kakak"-->
			
			<option value="Adik Pertama" 
			<?php
				if(@$_POST['saudara'] == "Anda adalah Adik Pertama"){ 
					echo 'selected=selected';
				}
			?>
			>Adik Pertama<!--memproses apakah yang dipilih "Adik Pertama"-->
			
			<option value="Adik Kedua" 
			<?php
				if(@$_POST['saudara'] == "Anda adalah Adik Kedua"){ 
					echo 'selected=selected';
				}
			?>
			>Adik Kedua <!--memproses apakah yang dipilih "Adik Kedua"-->
			
			<option value="Adik Tiri" 
			<?php
				if(@$_POST['saudara'] == "Anda adalah Adik Tiri"){ 
					echo 'selected=selected';
				}
			?>
			>Adik Tiri <!--memproses apakah yang dipilih "Adik Tiri"-->
		</select> <br />
		<input type="submit" value="Ok" />
	</form>
<?php
	if (isset($_POST['saudara'])) {
	echo $_POST['saudara'];
}
?>
</body>
</html>