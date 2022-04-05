<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aidat Borcu Ödeme</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
<link href="perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
 <script src="perfect-scrollbar/dist/perfect-scrollbar.js"></script>
<style type="text/css"> 
    
    .container5 {
      
			
        overflow: auto;
        position:relative;
		width:900px;
		height:340px;
		margin-top:30px;
		float:left;
		border:1px inset #000;
		padding-bottom:30px;
		padding-top:30px;
		padding-left:30px;
		padding-right:30px;
		margin-bottom:20px;
		}
		input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border: 2px solid ;
    border-radius: 4px;
    background-color: #f8f8f8;
}
input[type=submit], input[type=reset] {
    background-color: #C00;
	color:#FFF;
    border: none;
    color: white;
    padding: 14px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
        </style>

</head>
<body>
<div class="govde">
<div class="logo"><a href="index.php"><img src="img/logo.jpg" /></a></div>
<div class="menudivi">
<ul class="menu">
<li class="aktif"><a href="odeme.php"><font color="#FFFFFF">Aidat Borcu Ödeme</font></a></li>
<li><a href="sikayet.php">Şikayet</a></li>
<li><a href="giris.php">Yönetici Girişi</a></li>
</ul>
</div>
<div class="odemeyazısı">Aidat Borcunu Ödemek İçin Bilgilerinizi Giriniz:</div>
<hr />
<div class="container5">
<form action="" method="post">
<font color="#CC0000" size="6">Kullanıcı Bilgileri</font><br /><br />
Kullanıcı Adı:<input type="text" name="kulad" required />
Şifre:<input type="password" name="ksifre"required  />
<font color="#CC0000" size="6">Kart Bilgileri</font><br /><br />
Tutar:<input type="text" name="tutar"required />
Kart Sahibinin Adı Soyadı:<input type="text" name="kds"required />
Kart Numarası:<input type="text" name="kartno" maxlength="16" required/>
Son kullanma Tarihi:<br /><br /><select name="ay" required>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<select>
<select name="yil" required>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
<option>2026</option>
<option>2027</option>
<option>2028</option>
<option>2029</option>
<option>2030</option>
<option>2031</option>
<option>2032</option>
<select><br /><br />
CVV:<input type="text" name="cvv"maxlength="3" required/><br />
<br />
<center><input type="submit" name="gonder" value="ÖDE" />&nbsp;<input type="reset" name="sil" value="SİL" /></center>

</form>
</div>
<script>
    var $ = document.querySelector.bind(document);

    var ps = new PerfectScrollbar('.container5');

    $('#redraw').addEventListener('click', function () {
      var oldHtml = $('.container5').innerHTML;
      $('.container5').innerHTML = '';

      setTimeout(function () {
        $('.container5').innerHTML = oldHtml;
        ps.update();
      }, 500);
    });
    </script>
</div>
</body>
</html>
<?php
include("ayar.php");
if(isset($_POST["gonder"]))
{
$kulad=@$_POST["kulad"];
$ksifre=@$_POST["ksifre"];
$tutar=@$_POST["tutar"];
$kds=@$_POST["kds"];
$kartno=@$_POST["kartno"];
$ay=@$_POST["ay"];
$yil=@$_POST["yil"];
$cvv=@$_POST["cvv"];
$sec=mysql_query("select * from kullanici");
while($dizi=mysql_fetch_array($sec))
{
	
  if ($dizi['kulad']==$kulad && $dizi['ksifre']==$ksifre )
   {
	
    $ekle=mysql_query("insert into odeme (sno,kulad,ksifre,tutar,adsoyad,kartno,ay,yil,cvv) values('',
    '$kulad','$ksifre','$tutar','$kds','$kartno','$ay','$yil','$cvv') ");

    $kartekle=mysql_query("insert into kart (kartno,adsoyad,ay,yil,cvv)values ('$kartno','$kds','$ay',
     '$yil','$cvv')");
     break;
   }

}
 if(isset($ekle))
 {
 	?>
 	<script>
  alert("Ödeme İşlemi Tamamlandı.");
</script>
 	<?php
 }
 else
 {
 	?>
 	<script>
  alert("Ödeme İşlemi Başarısız Kullanıcı Bilgileri Yanlış!!");
</script>
 	<?php
 }
}

?>