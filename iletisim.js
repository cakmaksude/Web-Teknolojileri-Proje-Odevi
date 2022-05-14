
function kontrol()
 { 
var ad=document.forms["iletisimForm"]["ad"].value;
var soyad=document.forms["iletisimForm"]["soyad"].value;
var cinsiyet=document.forms["iletisimForm"]["cinsiyet"].value;
var dg=document.forms["iletisimForm"]["dg"].value;
var mail=document.forms["iletisimForm"]["email"].value;
var atpos=mail.indexOf("@");
var telefon=document.forms["iletisimForm"]["telefon"].value;
var adres=document.forms["iletisimForm"]["adres"].value;
var mesaj=document.forms["iletisimForm"]["mesaj"].value;
//var mailkontrol= 0;
/*mail.forEach(element => {
    if(element=='@')
    mailkontrol=7;
  });*/
if(ad=="" || ad==null)
{alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(soyad=="" || soyad==null)
{alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(cinsiyet=="" || cinsiyet==null)
{alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(dg=="" || dg==null)
{alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(adres=="" || adres==null)
{ alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(mesaj=="" || mesaj==null)
{alert("Lütfen Tüm Alanları Doldurunuz!!");
return false;}
else if(mail=="" || mail==null)
{
    alert("Lütfen Tüm Alanları Doldurunuz!");
    return false;
}
else if(atpos<1)
{
    alert("Lütfen maili doğru formatta giriniz!! (*********@*********)");
    return false;  
}
else if(telefon=="" || telefon==null)
{
    alert("Lütfen Tüm Alanlatı Doldurunuz!!");
    return false;
}
for(var i=0; i<10; i++)
{
  if(i==2 || i==5)
  {
    if(dg[i]=='.' || dg[i]=='/')
    continue;
    else
    {alert("Lütfen doğum gününü doğru formatta giriniz!! (GG.AA.YYYY)");
   return false;
   }
  }
  if(dg[i]=='0' || dg[i]=='1' || dg[i]=='2' || dg[i]=='3' || dg[i]=='4' || dg[i]=='5' || dg[i]=='6' || dg[i]=='7' || dg[i]=='8' || dg[i]=='9' )
  continue;
  else
  {alert("Lütfen doğum gününü doğru formatta giriniz!! (GG.AA.YYYY)")
 return false;}
}
for(var i=0; i<11; i++)
{
  if(i==0)
  {
    if(telefon[i] != '0')
   { alert("Lütfen telefon numarasını doğru formatta giriniz (05*********)");
    return false;}
  }
  if(i==1)
  {
    if(telefon[i] !='5')
    {alert("Lütfen telefon numarasını doğru formatta giriniz (05*********)");
    return false;}
  }
  if(telefon[i]=='0' || telefon[i]=='1' || telefon[i]=='2' || telefon[i]=='3' || telefon[i]=='4' || telefon[i]=='5' || telefon[i]=='6' || telefon[i]=='7' || telefon[i]=='8' || telefon[i]=='9' )
   continue;
   else
   {alert("Lütfen telefon numarasını doğru formatta giriniz  (05*********)");
   return false;}
}
 }
