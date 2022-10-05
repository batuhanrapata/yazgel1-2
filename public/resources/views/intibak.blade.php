<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Koü Ders İntibakı</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
	<img src="/js/images/bg.jpg" class="bg" alt="" height="1080" width="1980">
	<div id="logosayfa">
		<div style="display: inline-flex"><img class="logo" src="/js/images/logo.png" alt="" height="100px" width="100px" style="margin: 50px;"></div>
		<div style="display: inline-flex;font-size: 35px;"><p style="padding-top: 90px;text-align: center;color: white">KOCAELİ ÜNİVERSİTESİ BAŞVURU SİSTEMİ</p></div>
	</div>
	<!-- navbar -->
    <nav>
		<div class="logoo"><a href="/ogrenci_anamenu">DERS İNTİBAKI BAŞVURUSU</a></div>
		<ul>
			<li>
				<a href="#">Başvuru Yap</a>
				<ul>
					<li><a href="/ogrenci_dgs">DGS Başvurusu</a></li>
					<li><a href="/ogrenci_yatay">Yatay Geçiş Başvurusu</a></li>
					<li><a href="/ogrenci_intibak">Ders İntibakı Başvurusu</a></li>
					<li><a href="/ogrenci_cap">Çap Başvurusu</a></li>
					<li><a href="/ogrenci_yazokulu">Yaz Okulu Başvurusu</a></li>
				</ul>
			</li>
			<li><a href="/ogrenci_bekleyen">Bekleyen Başvurular</a></li>
			<li><a href="/ogrenci_onaylanan">Onaylanan Başvurular</a></li>
			<li><a href="/ogrenci_onaylanmayan">Onaylanmayan Başvurular</a></li>
            <li><a id="cikis">Çıkış</a></li>
		</ul>
	</nav>
	<!-- navbar sonu-->
	<!-- intibak başvurusu -->
	<div class="intibak">
		<section class="flex-class">
			<div class="content" style="margin-right: 200px;">
				<div class="container" style="width: 500px;">
					<p class="name" style="text-align:center;margin-right: 70px;">Ders İntibakı Başvurusu</p>
					<a style="margin-left: 160px;">Öğrenci Bilgileri</a>
					<p class="divideryatay flex-class"><span ></span></p>
					<input type="text"    name="fullname"        id="intibak-fullname"         placeholder="Ad Soyad">
					<input type="text"    name="number"          id="intibak-number"           placeholder="Numara">
					<input type="text"    name="kayit"           id="intibak-kayit"            placeholder="Kayıt Türü">
					<input type="text"    name="class"     	     id="intibak-class"            placeholder="Sınıf"><br><br>
					<a style="margin-left: 165px;">İntibak Bilgileri</a>
					<p class="divideryatay flex-class"><span ></span></p>
					<input type="text"    name="intibakders"     id="intibak-intibakders"      placeholder="İntibak Edeceği Ders Planı">
					<input type="text"    name="intibakyarıyıl"  id="intibak-intibakyarıyıl"   placeholder="İntibak Edeceği Yarıyıl"><br><br>
					<a style="margin-left: 50px;">Devam Etmekte Olduğu Yük. Öğrt. Kurumu</a>
					<input type="text"    name="universite"      id="intibak-universite"       placeholder="Kurum Adı">
					<input type="text"    name="department"      id="intibak-department"       placeholder="Bölüm/Program"><br><br>
					<a style="margin-left: 75px;">İntibak Ettireceği Yük. Öğrt. Kurumu</a>
					<input type="text"    name="universite2"     id="intibak-universite2"      placeholder="Kurum Adı">
					<input type="text"    name="department2"     id="intibak-department2"      placeholder="Bölüm/Program"><br><br>
					<a style="margin-left: 165px;">Ders Seçimi</a>
					<p class="divideryatay flex-class"><span ></span></p><br><br>
					<a style="margin-left: 50px;">Önceki Bölümünde Başarılı Olduğu Dersler</a>
					<input type="text"    name="ders1"     id="intibak-ders1"      placeholder="Ders/Akts">
					<input type="text"    name="ders2"     id="intibak-ders2"      placeholder="Ders/Akts">
					<input type="text"    name="ders3"     id="intibak-ders3"      placeholder="Ders/Akts">
					<input type="text"    name="ders4"     id="intibak-ders4"      placeholder="Ders/Akts">
                    <input type="text"    name="ders1"     id="intibak-ders5"      placeholder="Ders/Akts">
					<input type="text"    name="ders2"     id="intibak-ders6"      placeholder="Ders/Akts">
                    <br><br>
					<a style="margin-left: 10px;">İntibak Edeceği Bölümünde Yükümlü Olduğu Dersler</a>
					<input type="text"    name="ders5"     id="intibak-ders7"      placeholder="Ders/Akts">
					<input type="text"    name="ders6"     id="intibak-ders8"      placeholder="Ders/Akts">
					<input type="text"    name="ders7"     id="intibak-ders9"      placeholder="Ders/Akts">
					<input type="text"    name="ders8"     id="intibak-ders10"      placeholder="Ders/Akts">
                    <input type="text"    name="ders5"     id="intibak-ders11"      placeholder="Ders/Akts">
					<input type="text"    name="ders6"     id="intibak-ders12"      placeholder="Ders/Akts">

					<div id="logosayfaa">
						<div style="margin-left: 150px"><input style="display: inline-flex" type="checkbox" name="onaylama" id="onaylama" ></div>
						<div ><p style="display: inline-flex;padding-left: 15px;">onaylıyorum</p></div>
					</div><br><br>
					<p>
						Bilgileriniz eksiksiz doldurduktan sonra başvuruyu indirip imzalı çıktısınız gerekli belgeler kısmından sisteme yükleyiniz. Bu bilgileri sağlamayan başvurular değerlendirmeye alınmayacaktır
					</p><br>
					<button id="Cap-indir-button" class="btn">Başvuru Formunu İndir</button>
                    <br><br>
					<button id="Cap-yukle-button" class="btn" onclick="pickIntibak()">Başvuru Dosyası Seç</button>
                    <br><br>
                    <button id="Cap-yukle-button" class="btn" onclick="uploadIntibak()">Başvuru formunu Yükle</button>
                    <br><br>
                    <button id="İntibak-bitir" class="btn">Başvuruyu Tamamla</button>
                    <p class="divideryatay flex-class"><span></span></p>
				</div>
			</div>
		</section>
	</div>
	<!-- intibak başvurusu sonu-->

    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
    <script src="/js/firebaseauth_login.js"></script>
    <script type="module">

        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";

        const firebaseConfig = {
          apiKey: "AIzaSyD9YPj7Ra4AeDiWbXRuYjNb6wFTEP0ScQ4",
          authDomain: "bitmeyenodev.firebaseapp.com",
          databaseURL: "https://bitmeyenodev-default-rtdb.firebaseio.com",
          projectId: "bitmeyenodev",
          storageBucket: "bitmeyenodev.appspot.com",
          messagingSenderId: "978158269384",
          appId: "1:978158269384:web:375395ce47e076d53fc6fd",
          measurementId: "G-GW5EQGYGL2"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);

        import{
            getFirestore,doc,getDoc,setDoc,collection,addDoc,updateDoc,deleteDoc,deleteField
        }
        from "https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore.js";
        const db= getFirestore();

            let isim = document.getElementById('intibak-fullname');
            let numara = document.getElementById('intibak-number');
            let kayitturu = document.getElementById('intibak-kayit');
            let sinif =document.getElementById('intibak-class');
            let intibakders = document.getElementById('intibak-intibakders');
            let intibak_yariyil = document.getElementById('intibak-intibakyarıyıl');
            let intibak_uni = document.getElementById('intibak-universite');
            let intibak_bolum= document.getElementById('intibak-department');

            let int_edecek_uni = document.getElementById('intibak-universite2');
            let int_edecek_bolum = document.getElementById('intibak-department2');



            let onceki1 = document.getElementById('intibak-ders1');
            let onceki2 = document.getElementById('intibak-ders2');
            let onceki3 = document.getElementById('intibak-ders3');
            let onceki4 = document.getElementById('intibak-ders4');
            let onceki5 = document.getElementById('intibak-ders5');
            let onceki6 = document.getElementById('intibak-ders6');

            let edecegi1 = document.getElementById('intibak-ders7');
            let edecegi2 = document.getElementById('intibak-ders8');
            let edecegi3 = document.getElementById('intibak-ders9');
            let edecegi4 = document.getElementById('intibak-ders10');
            let edecegi5 = document.getElementById('intibak-ders11');
            let edecegi6 = document.getElementById('intibak-ders12');


            let tamamlabuton = document.getElementById("İntibak-bitir");

            async function AddDcoument_AutoID(){
                var ref= collection(db,"Ders İntibakı Başvuruları");
                const docRef = await addDoc(
                    ref, {
                    ogrenci_adi:isim.value,
                    ogrenci_numara:numara.value,
                    ogrenci_kayıt_turu:kayitturu.value,
                    ogrenci_sinif:sinif.value,
                    ogrenci_intibakders:intibakders.value,
                    ogrenci_intibak_yariyil:intibak_yariyil.value,
                    ogrenci_intibak_uni:intibak_uni.value,
                    ogrenci_intibak_bolum:intibak_bolum.value,
                    ogrenci_int_edecek_uni:int_edecek_uni.value,
                    int_edecek_bolum:int_edecek_bolum.value,

                    intibak_ettirecegi1:onceki1.value,
                    intibak_ettirecegi2:onceki2.value,
                    intibak_ettirecegi3:onceki3.value,
                    intibak_ettirecegi4:onceki4.value,
                    intibak_ettirecegi5:onceki5.value,
                    intibak_ettirecegi6:onceki6.value,

                    intibak_edecegi1:edecegi1.value,
                    intibak_edecegi2:edecegi2.value,
                    intibak_edecegi3:edecegi3.value,
                    intibak_edecegi4:edecegi4.value,
                    intibak_edecegi5:edecegi5.value,
                    intibak_edecegi6:edecegi5.value,
                    }
                )
                .then(()=>{
                    alert("Kayıt başarılı");
                })
                .catch((error)=>{
                    alert("Bir hata meydana geldi"+ error);
                })
            }
            tamamlabuton.addEventListener("click", AddDcoument_AutoID);
      </script>
</body>
	<!-- footer -->
		<div class="fContent" style="margin-top: 5000px;">
			<div class="sutun">
				<h3>Bize Ulaşın</h3>
				<p class="divider flex-class"><span></span></p>
				<ul class="socials">
				  	<li><a href="https://www.facebook.com/ahmet.yok.90281943/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/akyildizonurr/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCtOI1yvFKr2_9s5vRMZ5aHg" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://github.com/onurakyildiz58" target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://www.linkedin.com/in/onur-akyildiz-096016206/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		        </ul>
				<p><a href="mailto: onurakyildi41@gmail.com">mail adresi</a></p><br>
				<p>+90(535) 424 5383</p>
			</div>
			<div class="sutun">
				 <h3>konum</h3>
			     <p class="divider flex-class"><span></span></p><br>
				 <p>
					 Kabaoğlu, Baki Komsuoğlu bulvarı No:515, Umuttepe, 41001 İzmit/Kocaeli
				 </p>
				 <p>
					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48297.264694438076!2d29.949988536699713!3d40.83720911681787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb5badf629fe45%3A0xc81fa849234e8755!2sKocaeli%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1637714873370!5m2!1str!2str" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				 </p>

			</div>
		</div>
		<div class="footerbottom">
			<p>&copy 2021 Tüm hakları saklıdır, <strong>Batuhan Rapata, Berk Akın ve Onur Akyıldız </strong> tarafından yapılmıştır</p>
		</div>
	<!-- footer sonu-->
</html>
