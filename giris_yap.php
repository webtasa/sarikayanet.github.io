<?php 

include "baglan.php";
if(isset($_POST['girisbtn'])){
	$kulsor = $db->prepare("SELECT * FROM kullanici WHERE username = ? AND password = ?");
	$kulsor->execute(array($_POST['username'],md5($_POST['password'])));
	$kulcek = $kulsor->fetch(PDO::FETCH_ASSOC);
	$say = $kulsor->rowCount();
	if($say > 0){
	  $_SESSION['username'] = $kulcek['username'];
	  $_SESSION['name'] = $kulcek['firstname']." ".$kulcek['lastname'];
	  header("Location:admin/kullanici.php?islem=ok");
	}else{
	  header("Location:giris_yap.php?islem=no");
	  echo "ASMDKLAS";
	}
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="assets/img/baslogo-removebg-preview.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/styles2.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>SARIKAYANET | Nefes Aldığın Her Yerde</title></head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="POST">
        <div class="main_header">
          <h1>Giriş</h1>
        </div>
				<div class="social-container">
				</div>
				<p>Hesabınız Yok Mu? <a href="kayit_ol.php">Hemen Oluşturun</a></p>
				<input type="text" name="username" placeholder="username" />
				<input type="text" name="password" placeholder="password" />
                <button type="submit" name="girisbtn" class="btn  display-7 text-warning bg-dark ">GÖNDER</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<img src="assets/img/banner-removebg-preview.png" style="width: 310px;">
				</div>
			</div>
		</div>
	</div>
</body>
</html>