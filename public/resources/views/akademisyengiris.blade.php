<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Akademisyen Giriş</title>
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
					<p class="name">Akademisyen Giriş Yap</p>
					<input type="email"    name="email"    id="login-email"    placeholder="Email">
					<input type="password" name="password" id="login-password" placeholder="Password">
					<button id="login-button" class="btn" onClick="window.location.href = '/ogrenci_anamenu';">Giriş</button>
					<p class="divider flex-class"><span></span></p>
					<div class="forget-password"><a href="/akademisyen_sifre_unuttum">Şifremi Unuttum</a></div>
				</div>
				<div class="sub-container flex-class">
					<a href="/ogrenci_giris">Öğrenci Giriş</a>
				</div>
			</div>
		</section>
	</div>
	<!-- login bitti -->
</body>
</html>
