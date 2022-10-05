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
