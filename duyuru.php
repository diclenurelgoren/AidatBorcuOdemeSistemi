<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aidat Borcu Ödeme</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
 <link href="perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <script src="perfect-scrollbar/dist/perfect-scrollbar.js"></script>
    <style>
      #container {
        border:5px solid #424242;
        height:250px;
        width: 400px;
        padding: 5px;
        overflow: auto;
        position: relative;
		margin-top:50px;
      }
	  #container1 {
        border:5px solid #424242;
        height:250px;
        width: 400px;
        padding: 5px;
        overflow: auto;
        position: relative;
		margin-top:50px;
      }
	   
    </style>
</head>
<body>
<div class="govde">
<div class="logo"><a href="index.php"><img src="img/logo.jpg" /></a></div>
<div class="menudivi">
<ul class="menu">
<li><a href="odeme.php">Aidat Borcu Ödeme</a></li>
<li><a href="sikayet.php">Şikayet</a></li>
<li><a href="giris.php">Yönetici Girişi</a></li>
</ul>
</div>
<div class="duyurudiv">
<div class="duyuruyan"><img src="img/kural.jpg" /></div>
 <div id="container">
 <h1  align="center"><font color="#019AFF">Duyurular</font></h1>
      <p><b>-Değerli Apartman Sakinleri
      Aidat Borcunuzu En Geç
      30.11.2021
      Tarihine Kadar Ödemeniz Gerekmektedir.</p>
      <p>-Değerli Apartman Sakinleri
      15.11.2021 Tarihinde Yönetim Ofisinde Toplantı Vardır Katılmanız Gerekmektedir.</p>
      <p>-Değerli Apartman Sakinleri
      15.11.2021 Tarihine Kadar Apartmanda Tadilat Vardır.</p></b>
     
    </div>
    

    <script>
    var $ = document.querySelector.bind(document);

    var ps = new PerfectScrollbar('#container');

    $('#redraw').addEventListener('click', function () {
      var oldHtml = $('#container').innerHTML;
      $('#container').innerHTML = '';

      setTimeout(function () {
        $('#container').innerHTML = oldHtml;
        ps.update();
      }, 500);
    });
    </script>
     <div id="container1">
     <h1 align="center"><font color="#019AFF">Apartman Kuralları</font></h1>
      <p><b>-Kapı önlerine eşyalarınızı bırakmayınız.</p>
      <p>-Apartmanda sigara içmeyiniz.</p>
      <p>-Apartman önüne araç park etmeyiniz.</p>
      <p>-Apartman içine çöp atmayınız.</p>
       <p>-Aidat borcunuzu lütfen zamanında ödeyiniz.</p>
      <p>-Çöplerinizi tam tarih ve saatinde kapının önüne bırakınız lütfen.</p>   
    </div>
  

    <script>
    var $ = document.querySelector.bind(document);

    var ps = new PerfectScrollbar('#container1');

    $('#redraw').addEventListener('click', function () {
      var oldHtml = $('#container1').innerHTML;
      $('#container1').innerHTML = '';

      setTimeout(function () {
        $('#container1').innerHTML = oldHtml;
        ps.update();
      }, 500);
    });
    </script>
    </div>
</div>
</body>
</html>
