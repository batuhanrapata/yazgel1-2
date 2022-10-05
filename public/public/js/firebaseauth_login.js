
var firebaseConfig = {
    apiKey: "AIzaSyD9YPj7Ra4AeDiWbXRuYjNb6wFTEP0ScQ4",
    authDomain: "bitmeyenodev.firebaseapp.com",
    databaseURL: "https://bitmeyenodev-default-rtdb.firebaseio.com",
    projectId: "bitmeyenodev",
    storageBucket: "bitmeyenodev.appspot.com",
    messagingSenderId: "978158269384",
    appId: "1:978158269384:web:375395ce47e076d53fc6fd",
    measurementId: "G-GW5EQGYGL2"
};

firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
var auth2 = firebase.auth();
const database = firebase.database();
const storage = getStorage(firebaseApp);

function register() {
    mail = document.getElementById('signup-email').value
    sifre = document.getElementById('signup-password').value
    isim = document.getElementById('signup-name').value
    numara = document.getElementById('signup-number').value
    telefon = document.getElementById('signup-telephone').value
    tc = document.getElementById('signup-id').value
    adres = document.getElementById('signup-adress').value
    sinif = document.getElementById('signup-class').value
    dogumgunu = document.getElementById('signup-birthday').value
    uni = document.getElementById('signup-uni').value
    fakulte = document.getElementById('signup-faculty').value
    bolum = document.getElementById('signup-department').value


    if (validate_email(mail) == false || validate_password(sifre) == false) {
        alert('Email veya Şifre Formatı Hatalı')
        return
    }
    if (validate_field(isim) == false ||
        validate_field(numara) == false ||
        validate_field(telefon) == false ||
        validate_field(tc) == false ||
        validate_field(adres) == false ||
        validate_field(sinif) == false ||
        validate_field(dogumgunu) == false ||
        validate_field(uni) == false ||
        validate_field(fakulte) == false ||
        validate_field(bolum) == false
    ) {
        alert('Bir Veya Birden fazla alan boş!!')
        return
    }

    auth.createUserWithEmailAndPassword(mail, sifre)
    .then(()=>{
        alert("Kayıt başarılı");
    })
    .catch((error)=>{
        alert("Bir hata meydana geldi"+ error);
    })
}


function login() {

    mail = document.getElementById('login-email').value
    password = document.getElementById('login-password').value

    if (validate_email(mail) == false || validate_password(password) == false) {
        alert('Email or Password is Outta Line!!')
        return
    }

    auth.signInWithEmailAndPassword(mail, password)
        .then(()=>{
            alert("Giriş başarılı");
            window.location.href="/ogrenci_anamenu";
        })
        .catch((error)=>{
            alert("Bir hata meydana geldi"+ error);
        })


    /*var user_id = firebase.auth().currentUser.uid;
    alert(user_id);*/
}


function validate_email(mail) {
    expression = /^[^@]+@\w+(\.\w+)+\w$/
    if (expression.test(mail) == true) {
        // Email is good
        return true
    } else {
        // Email is not good
        return false
    }
}

function validate_password(sifre) {
    // Firebase only accepts lengths greater than 6
    if (sifre < 6) {
        return false
    } else {
        return true
    }
}

function validate_field(field) {
    if (field == null) {
        return false
    }

    if (field.length <= 0) {
        return false
    } else {
        return true
    }
}


const cikis = document.querySelector('#cikis');
cikis.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() => {
        alert('Çıkış Yapıldı');
        window.location.href = "/ogrenci_giris";
    })
})

function reset(){
     mail = document.getElementById('reset-email').value
     auth2.sendPasswordResetEmail(mail)
     .then(()=>{
             alert('Şifre Sıfırlama bağlantısı mailinize gönderildi')
     })
     .catch((error)=>{
         alert("Bir hata meydana geldi"+ error);
     })
}

function yatayPDF(){

    var doc=new jsPDF();

    doc.text(document.getElementById('yatay-number').value, 10, 10);
    doc.text(document.getElementById('yatay-fullname').value, 10, 20);
    doc.text(document.getElementById('yatay-telephone').value, 10, 30);
    doc.text(document.getElementById('yatay-adress').value, 10, 40);

    doc.text(document.getElementById('yatay-uni').value, 10, 50);
    doc.text(document.getElementById('yatay-faculty').value, 10, 60);
    doc.text(document.getElementById('yatay-department').value, 10, 70);
    doc.text(document.getElementById('yatay-class').value, 10, 80);

    doc.text(document.getElementById('yatay-uni2').value, 10, 90);
    doc.text(document.getElementById('yatay-faculty2').value, 10, 100);
    doc.text(document.getElementById('yatay-department2').value, 10, 110);
    doc.text(document.getElementById('yatay-class2').value, 10, 120);

    doc.save("mypdf.pdf")
}

var files = [];
var reader;
var imgURL ,imgName;
function pickYatay(){

    var input=document.createElement('input');
    input.type='file';

    input.onchange = e => {
        files = e.target.files;
        reader= new FileReader();
        reader.onload = function (){

        }
        reader.readAsDataURL(files[0]);
    }
    input.click();
}
function uploadYatay(){

    fullname = document.getElementById('yatay-fullname').value
    numara = document.getElementById('yatay-number').value

    var uploadTask = firebase.storage().ref('YatayBaşvuru/' + numara + "_" + fullname+ ".pdf").put(files[0]);

    uploadTask.on('state_changed', function(snapshot){
            var progress =(snapshot.bytesTranferred / snapshot.totalBytes) * 100;
        },
        function (error){
            alert('hata meydana geldi');
        },
        function (){
            uploadTask.snapshot.ref.getDownloadURL().then(function (url){
                imgURL = url;
            });

            firebase.database().ref('files/'+imgName).set({
                name: imgName,
                Link: imgURL
            });
            alert('başarıyla dosya yüklendi');
        }
    );
}

var imgURL2 ,imgName2;
var files2 = [];
var reader2;
function pickYaz(){


    var input2=document.createElement('input');
    input2.type='file';

    input2.onchange = e => {
        files2 = e.target.files;
        reader2= new FileReader();
        reader2.onload = function (){

        }
        reader2.readAsDataURL(files2[0]);
    }
    input2.click();
}
function uploadYaz(){
    fullname2 = document.getElementById('yaz-fullname').value
    numara2 = document.getElementById('yaz-Number').value

    var uploadTask2 = firebase.storage().ref('YazBaşvuru/'+numara2+"_"+fullname2+".pdf").put(files2[0]);

    uploadTask2.on('state_changed', function(snapshot){
            var progress =(snapshot.bytesTranferred / snapshot.totalBytes) * 100;
        },
        function (error){
            alert('hata meydana geldi');
        },
        function (){
            uploadTask2.snapshot.ref.getDownloadURL().then(function (url2){
                imgURL2 = url2;
            });

            firebase.database().ref('files/'+imgName2).set({
                name: imgName2,
                Link: imgURL2
            });
            alert('başarıyla dosya yüklendi');
        }
    );
}

var imgURL3 ,imgName3;
var files3 = [];
var reader3;
function pickIntibak(){
    var input3=document.createElement('input');
    input3.type='file';

    input3.onchange = e => {
        files3 = e.target.files;
        reader3= new FileReader();
        reader3.onload = function (){

        }
        reader3.readAsDataURL(files3[0]);
    }
    input3.click();
}
function uploadIntibak(){
    fullname3 = document.getElementById('intibak-fullname').value
    numara3 = document.getElementById('intibak-number').value

    var uploadTask3 = firebase.storage().ref('İntibakBaşvuru/'+numara3+"_"+fullname3+".pdf").put(files3[0]);

    uploadTask3.on('state_changed', function(snapshot){
            var progress =(snapshot.bytesTranferred / snapshot.totalBytes) * 100;
        },
        function (error){
            alert('hata meydana geldi');
        },
        function (){
            uploadTask3.snapshot.ref.getDownloadURL().then(function (url3){
                imgURL3 = url3;
            });

            firebase.database().ref('files/'+imgName3).set({
                name: imgName3,
                Link: imgURL3
            });
            alert('başarıyla dosya yüklendi');
        }
    );
}


var imgURL4 ,imgName4;
var files4 = [];
var reader4;
function pickCap(){
    var input4=document.createElement('input');
    input4.type='file';

    input4.onchange = e => {
        files4 = e.target.files;
        reader4= new FileReader();
        reader4.onload = function (){

        }
        reader4.readAsDataURL(files3[0]);
    }
    input4.click();
}
function uploadCap(){
    fullname4 = document.getElementById('cap-fullname').value
    numara4 = document.getElementById('cap-number').value

    var uploadTask4 = firebase.storage().ref('CapBaşvuru/'+numara4+"_"+fullname4+".pdf").put(files4[0]);

    uploadTask4.on('state_changed', function(snapshot){
            var progress =(snapshot.bytesTranferred / snapshot.totalBytes) * 100;
        },
        function (error){
            alert('hata meydana geldi');
        },
        function (){
            uploadTask4.snapshot.ref.getDownloadURL().then(function (url4){
                imgURL4 = url4;
            });

            firebase.database().ref('files/'+imgName4).set({
                name: imgName4,
                Link: imgURL4
            });
            alert('başarıyla dosya yüklendi');
        }
    );
}
