<?php


if($_POST["email"]=="b211210012@sakarya.edu.tr") 
{
if($_POST["sifre"]=="b211210012")
{
	echo"<!doctype html>
<html lang=\"tr\">
  <head>
    
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

    <title>B211210012/Login</title>
  </head>
  <style>
  table{
    border: solid black;
    background-color: darkred;
    text-align:center;
    font-size:50px;
    color:white;
  }
  body.login{
    background-image:url('martı.jpg'); 
    background-repeat:no-repeat;
      background-attachment: fixed;
     background-size: 100% 100%;
     }
  </style>
  <body class=\"login\">
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
<br><br><br>
<table>
<tr>
<th> Hoşgeldiniz \"B211210012\"</th>
</tr>


    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
  </body>
</html>
	 ";
}
else
{
  
  echo "Yönlendiriliyorsunuz.."; 
  $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
  header("Refresh: 0; url=".$geldigi_sayfa."");
  
}
}
else
{
  echo "Yönlendiriliyorsunuz.."; 
  $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
  header("Refresh: 0; url=".$geldigi_sayfa."");
	
}

?>