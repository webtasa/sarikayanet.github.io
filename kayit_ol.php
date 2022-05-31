<?php 
include "baglan.php";

	$kullanici = $db->prepare("SELECT * FROM kullanici");
	$kullanici->execute();	

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="assets/img/baslogo-removebg-preview.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/styles3.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>SARIKAYANET | Nefes Aldığın Her Yerde</title></head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="POST">
        <div class="main_header">
          <h1>Kayıt Ol</h1>
        </div>
				<div class="social-container">
				</div>
				<input type="text" name="username" placeholder="username" />
				<input type="text" name="password" placeholder="password" />
                <input type="text" name="firstname" placeholder="firstname" />
				<input type="text" name="lastname" placeholder="lastname" />
                <br>
				<button type="submit" name="ekle" class="btn  display-7 text-warning bg-dark ">GÖNDER</button>
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
<?php 
if(isset($_POST['ekle'])){
	$kullanici_ekle = $db->prepare("INSERT INTO kullanici SET
		username=:kullanici,
		password=:parola,
		firstname=:ad,
		lastname=:soyad
		");
	$kullanici_calistir = $kullanici_ekle->execute(array(
		'kullanici' => $_POST['username'],
		'parola' => md5($_POST['password']),
		'ad' => $_POST['firstname'],
		'soyad' => $_POST['lastname']

	));
}

if($kullanici_calistir){
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 text-center " >
    <h1 class="mbr-section-title  display-2 ">
        <strong  class="text-warning ">KAYIT EDİLDİ</strong>
    </h1>
</div>
<?php 
}else{
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <h1 class="mbr-section-title mb-4 display-2">
        <strong  class="text-warning">KAYIT EDİLEMEDİ</strong>
    </h1>
</div>
    <?php 

}

  
 ?>