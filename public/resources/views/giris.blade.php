<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ÖBS Giriş</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
	<img src="/js/images/bg.jpg" alt="" class="bg" width="1920" height="1080">
	<div id="logosayfa">
		<img class="logo" src="/js/images/logo.png" alt="" height="100px" width="100px" style="margin: 50px">
	</div>
	<!-- login kısmı https://www.youtube.com/watch?v=oKBHgGtfvSQ -->
	<div class="giris">
		<section class="flex-class">
			<div class="content">
				<div class="container">
					<p class="name">Öğrenci Giriş Yap</p>
					<input type="email"    name="email"    id="login-email"    placeholder="Email">
					<input type="password" name="password" id="login-password" placeholder="Password">
					<button class="btn" onClick="login()">Giriş</button>
					<p class="divider flex-class"><span></span></p>
					<div class="forget-password"><a href="/ogrenci_sifresifirla">Şifremi Unuttum</a></div>
				</div>
				<div class="sub-container flex-class">
					<a href="/ogrenci_hesapolustur">Öğrenci Hesap Aç</a>
				</div>
				<div class="sub-container flex-class">
					<a href="/akademisyen_giris">Akademisyen Giriş</a>
				</div>
			</div>
		</section>
	</div>
	<!-- login bitti -->
</body>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
<script src="/js/firebaseauth_login.js"></script>
</html>
