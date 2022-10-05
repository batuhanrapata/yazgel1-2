<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ÖBS Hesap AÇ</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<img src="/js/images/bg.jpg" alt="" class="bg" width="1920" height="1080">
	<div id="logosayfa">
		<img class="logo" src="/js/images/logo.png" alt="" height="100px" width="100px" style="margin: 50px;">
	</div>
	<!-- hesap aç -->

	<div class="hesap">
		<section class="flex-class">
			<div class="content">
				<div class="container">
					<p class="name">Öğrenci Kayıt Ol</p>
					<img src="/js/images/avatar.png"  style="margin-left: 40px" alt="" class="avatar">
					<input type="text"         id="signup-name"       placeholder="Ad Soyad">
					<input type="text"         id="signup-number"     placeholder="Numara">
					<input type="email"       id="signup-email"      placeholder="Email">
					<input type="text"       id="signup-telephone"  placeholder="Telefon">
					<input type="text"          id="signup-id"         placeholder="T.C">
					<input type="text"          id="signup-adress"     placeholder="Adres">
					<input type="text"        id="signup-class"      placeholder="Sınıf">
					<input type="text"        id="signup-birthday"   placeholder="Doğum Tarihi">
					<input type="text"             id="signup-uni"        placeholder="Üniversite">
					<input type="text"         id="signup-faculty"    placeholder="Fakülte">
					<input type="text"      id="signup-department" placeholder="Bölüm">
					<input type="password"  id="signup-password"   placeholder="Şifre">
					<button onclick="register()">Kayıt</button>
					<p class="divider flex-class"><span></span></p>
					<div class="forget-password"><a href="/ogrenci_sifresifirla" style="text-align: center;">Şifremi Unuttum</a></div>
				</div>
				<div class="sub-container flex-class">
					<a href="/ogrenci_giris">Öğrenci Giriş Yap</a>
				</div>
			</div>
		</section>
	</div>
	<!-- hesap aç sonu -->

</body>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>


  <script src="/js/firebaseauth_login.js"></script>
</html>
