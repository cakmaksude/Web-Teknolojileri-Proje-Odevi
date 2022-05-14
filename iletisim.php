<?php
echo"<!doctype html>
<html lang=\"tr\">
  <head>
    
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

    <title>B211210012/Login</title>
  </head>
  <body style=\"background-color:#FDF5E6;\">
    <nav class=\"navbar navbar-expand-lg navbar-dark  \" style=\"background-color:black;\" >
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">︵︵ </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
      <div class=\"navbar-nav\">
        <a class=\"nav-link\" href=\"index.html\">HAKKINDA</a>
        <a class=\"nav-link\" href=\"ozgecmis.html\">ÖZGEÇMİŞ</a>
        <a class=\"nav-link\" href=\"sehrim.html\">ŞEHRİM</a>
        <a class=\"nav-link\" href=\"mirasimiz.html\">MİRASIMIZ</a>
		<a class=\"nav-link\" href=\"ilgialan.html\">İLGİ ALANLARIM</a>
		<a class=\"nav-link\" href=\"iletisim.html\">İLETİŞİM</a>
		<a class=\"nav-link active\" aria-current=\"page\" href=\"login.html\">LOGİN</a>
      </div>
    </div>
  </div>
</nav>
<br><br><br><p>";

echo"Bizimle iletişime geçtiğiniz için teşekkürler Sayın ".$_POST["ad"]." ".$_POST["soyad"]."</p><br>";
echo"<p>"."Gönderdiğiniz Bilgiler:"."</p><br>";
echo"<p>"."İsim Soyisim: ".$_POST["ad"]." ".$_POST["soyad"]."</p><br>";
echo"<p>"."Cinsiyet: ";
if($_POST["cinsiyet"]=="1") {echo"Kadın"."</p><br>";}
else {echo"Erkek"."</p><br>";}
echo"<p>"."Doğum Tarihi: ".$_POST["dg"]."</p><br>";
echo"<p>"."E-posta Adresi: ".$_POST["email"]."</p><br>";
echo"<p>"."Telefon Numarası: ".$_POST["telefon"]."</p><br>";
echo"<p>"."Adres: ".$_POST["adres"]."</p><br>";
echo"<p>"."Mesajınız: ".$_POST["mesaj"]."</p><br>";

?>