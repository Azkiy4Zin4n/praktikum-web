<html>
<head>
	<title>Login Page</title> <!--title halaman web-->
</head>

<style type="text/css">

*{font-family: Segoe UI, Tahoma;
margin: auto;
padding:0;

}

#container{
	margin:  20px auto;
	width: 15%; <!--ukuran lebar tabel luar-->
	height: auto; 
	padding: 10px; <!--ukuran jarak border luar dan tabel-->
	border: 1px solid blue; <!--warna border dari tabel-->
}

.textinput{
width: 100%; <!--ukuran dari lebar kolom dalam-->
height: 30px;
margin: 5px auto;
}

.btn{
	width: 100%;
	padding: 5px;
	background-color: #06ff00; <!--pemberian warna pada tombol login dengan warna hijau muda-->
	border: none; <!--tombol login tanpa border-->
	color: white;
	font-weight: 900; <!--ukuran font dari login-->

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 11px; <!--ukuran huruf-->
	color: white; <!--pemberian warna pada huruf-->
}

.textinput{
	background-color: #fafafa; <!--pemberian warna pada background tabel dengan warna PUTIH-->
	border: inset 1px #efefef; <!--pemberian warna background kolom tabel dengan warna keabu-abuan-->
}
</style>
<script>

function cekhuruf(huruf) //fungsi pengecekan huruf masukan
			{
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))<!--pemberian kondisi untuk mencocokan masukan username-->
  {
  alert("Username dan Password harus diisi"); <!--pemberitahuan dari masukan username dan password yang kosong-->
   document.getElementById("username").focus(); <!--menangkap masukan dari kolom username->
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false) <!--pemberian kondisi untuk mencocokan masukan password-->
  {
  	alert("Username dan password harus berupa huruf"); <!--pemberitahuan dari masukan username dan password yang salah-->
  	 document.getElementById("pass").focus();<!--menangkap masukan dari kolom password->
  	return false;
  }


 
  return true;
}
</script>
<body>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		<input type="text" name="username" class="textinput" id="username" /> <!--permberian type, name, class, id dari usernama-->
		<input type="password" name="pass" class="textinput" id="pass"/> <!--permberian type, name, class, id dari password-->
		<input type="submit" name="submit" value="sign in" class="btn"/> <!--permberian type, name, value, class, dari tombol sign in-->
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='azkiya')&&(isset($_POST['pass'])&&$_POST['pass']=='qwerty')) //memberikan form login username dan password
	{ 
		echo "<center>Selamat datang, ". $_POST['username']."</center>"; //jawaban ketika username dan password benar
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>"; //jawaban apabila username/password salah
	}
}
 ?>

</body>
</html>