<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Koü Çap</title>
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
		<div class="logoo"><a href="/ogrenci_anamenu">ÇAP BAŞVURUSU</a></div>
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
	<!-- çap başvurusu -->
	<div class="cap">
		<section class="flex-class">
			<div class="content" style="margin-right: 200px;">
				<div class="container" style="width: 500px;">
					<p class="name" style="text-align:center;margin-right: 10px;">Çift Anadal Programı Başvurusu</p>
					<a style="margin-left: 150px;">Öğrenci Bilgileri</a>
					<p class="divideryatay flex-class"><span ></span></p>
					<input type="text"         	   id="cap-fullname"          placeholder="Ad Soyad">
					<input type="text"                    id="cap-ID"                placeholder="T.C Kimlik No">
					<input type="text"             id="cap-number"         placeholder="Numara">
					<input type="email"                id="cap-email"             placeholder="email">
					<input type="text"                id="cap-adress"            placeholder="Adres">
					<input type="text"         id="cap-anadalfaculty"     placeholder="Anadal Fak.">
					<input type="text"        id="cap-anadalprogram"     placeholder="Anadal Prog.">
					<input type="text"               id="cap-class"             placeholder="Sınıf">
					<input type="text"             id="cap-ortalama"          placeholder="Genel Ortalama">
					<input type="text"                  id="cap-puan"              placeholder="Ösys puanı/türü">
					<a style="margin-left: 110px;">Bölüm/Program Tercihleri</a>
					<p class="divideryatay flex-class"><span ></span></p><br>
					<a style="margin-left: 170px;">1. Tercih</a>
					<input type="text"          id="cap-firstfaculty"      placeholder="Fakülte-Bölüm">
					<input type="text"              id="cap-firstcap"          placeholder="Çap">
					<br>
					<a style="margin-left: 170px;">2. Tercih</a>
					<input type="text"          id="cap-secondfaculty"      placeholder="Fakülte-Bölüm">
					<input type="text"             id="cap-secondcap"          placeholder="Çap">
					<div id="logosayfaa">
						<div style="margin-left: 150px"><input style="display: inline-flex" type="checkbox" name="onaylama" id="onaylama" ></div>
						<div ><p style="display: inline-flex;padding-left: 15px;">onaylıyorum</p></div>
					</div>
					<br><br>
					<p>
						Bilgileriniz eksiksiz doldurduktan sonra başvuruyu indirip imzalı çıktısınız gerekli belgeler kısmından sisteme yükleyiniz. Bu bilgileri sağlamayan başvurular değerlendirmeye alınmayacaktır
					</p>
					<br>
					<p>
						1-Bir anadal Programına kayıtlı öğrenci, aynı program için çift anadal ya da yandal başvurusunda bulunamaz
					</p>
					<p>
						2-Bir programa çift anadal başvurusunda bulunan aday, aynı programa yandal için tercihte bulunamaz
					</p>
					<p>
						3-Bir programa yandal başvurusunda bulunan aday aynı programa çift anadal için tercihte bulunamaz
					</p>
					<br>
					<p>
						Yazılı üç maddeye aksi yönde tercihte bulunan adayların başvuruları iptal edilir
					</p>
					<button id="Cap-indir-button" class="btn">Başvuru Formunu İndir</button>
					<br><br>
					<button id="Cap-yukle-button" class="btn" onclick="pickCap()">Başvuru Dosyası Seç</button>
                    <br><br>
                    <button id="Cap-yukle-button" class="btn" onclick="uploadCap()">Başvuru formunu Yükle</button>
                    <br><br>
					<button id="Cap-bitir" class="btn">Başvuruyu Tamamla</button>
					<p class="divideryatay flex-class"><span></span></p>
				</div>
			</div>
		</section>
	</div>
	<!-- çap başvurusu sonu -->

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

            let isim = document.getElementById('cap-fullname');
            let adres = document.getElementById('cap-adress');
            let telefon = document.getElementById('cap-telephone');
            let bulundugusinif = document.getElementById('cap-class');
            let bulundugubolum = document.getElementById('cap-anadalprogram');
            let osyspuani = document.getElementById('cap-puan');
            let tc = document.getElementById('cap-ID');
            let mail= document.getElementById('cap-email');
            let bulundugufakulte = document.getElementById('cap-anadalfaculty');
            let genelort = document.getElementById('cap-ortalama');

            let capfak1 = document.getElementById('cap-firstfaculty');
            let captercih1 = document.getElementById('cap-firstcap');

            let capfak2 = document.getElementById('cap-secondfaculty');
            let captercih2 = document.getElementById('cap-secondcap');


            let tamamlabuton = document.getElementById("Cap-bitir");

            async function AddDcoument_AutoID(){
                var ref= collection(db,"CAP Başvurular");
                const docRef = await addDoc(
                    ref, {
                    ogrenci_adi:isim.value,
                    ogrenci_adresi:adres.value,
                    ogrenci_telefon:telefon.value,
                    ogrenci_sınıf:bulundugusinif.value,
                    ogrenci_bolum:bulundugubolum.value,
                    ogrenci_fakulte:bulundugufakulte.value,
                    ogrenci_osys_puani: osyspuani.value,
                    ogrenci_tc:tc.value,
                    ogrenci_mail:mail.value,
                    ogrenci_genelort:genelort.value,
                    basvurulan_ilk_capfak1:capfak1.value,
                    basvurulan_ikinci_capfak2:capfak2.value,
                    basvurulan_ilk_captercih1:captercih1.value,
                    basvurulan_ikinci_captercih2:captercih2.value
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
		<div class="fContent" style="margin-top: 1600px;">
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
