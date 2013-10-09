<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Checkbox</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi : <br />
		<input type="checkbox" name="Hobi[]" value="Futsal"  
		<?php
			if($_POST['Hobi[]']="Futsal"){
				echo 'checked="checked"';
			}
		?>		
		>Futsal <br /> <!--memeriksa apakah yang dipilih "Futsal"-->
		
		<input type="checkbox" name="Hobi[]" value="DOTA2"  
		<?php
			if($_POST['Hobi[]']="DOTA2"){
				echo 'checked="checked"';
			}
		?>		
		>DOTA2 <br /> <!--memeriksa apakah yang dipilih "DOTA2"-->
		
		<input type="checkbox" name="Hobi[]" value="Ngopi"  
		<?php
			if($_POST['Hobi[]']="Ngopi"){
				echo 'checked="checked"';
			}
		?>		
		>Ngopi <br /> <!--memeriksa apakah yang dipilih "Ngopi"-->

		<input type="submit" value="Ok" />
	</form>
<?php
	// Ekstraksi nilai
	if (isset($_POST['Hobi'])) {
		foreach ($_POST['Hobi'] as $key => $val) {
		echo $key . ' > ' .$val . '<br />';
		}
	}
?>
</body>
</html>