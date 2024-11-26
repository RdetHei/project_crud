<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <br>
    <?php
    if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
    ?>
   <div class="container">
    <div class="login">
   <form method="POST" action="aksi_login.php">
            <h1 align="center">LOGIN</h1>
            <hr>
            <p>WISDOM AND KNOWLEDGE</p>
            <label>Username : </label>
            <input type="text" name="Username" placeholder="Rdet.hei">
            <label>Password : </label>
            <input type="password" name="Password" placeholder="*****">
            <input type="submit" value="SIGN UP">
            <p> <a href="#">Forgot Password?</a></p>
    
   </form>
   </div>
   <div class="right">
    <img src="lebigbagus.png">
   </div>
   </div>
</body>
</html>