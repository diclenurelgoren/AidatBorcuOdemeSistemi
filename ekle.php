<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aidat Borcu Ödeme</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
<style type="text/css">
input[type=submit], input[type=reset] {
	background-color:#CC0000;
    border: none;
    text-align:center;
    padding: 11px 50px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	margin-bottom:20px;
    color:#FFF;
    font-family: verdana;
      font-size: 13px;
      margin-left: 5px;
}
a 
{
	background-color:#CC0000;
    border: none;
    text-align:center;
    padding: 9px 50px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	margin-bottom:20px;
    color:#FFF;
    text-decoration: none;
    font-family: verdana;
    font-size: 16px;
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

.ekleme
{
	width: 500px;
	height: auto;
	margin: auto;
	margin-top: 15px;
	border: 3px solid #000000;
	padding: 15px;
}
</style>
</head>
<body>


<div class="ekleme"><h2><font color="#CC0000">KULLANICI EKLEME</font></h2>
<form action="" method="post">
<b>KULLANICI ADI:</b><input type="text" name="kulad" size="50" required/>
<b>ŞİFRE:</b><input type="password" name="ksifre"  size="50" required/>
<b>AD SOYAD:</b><input type="text" name="adsoyad"  size="50" required/>
<b>BLOK:</b><select name="blok" required>
	<option>A</option>
	<option>B</option>
	<option>C</option>
</select><br><br>
<b>DAİRE NO:</b><input type="text" name="daire"  size="50" required/>
<b>TELEFON:</b><input type="text" name="tel"  size="50" required/>
<input type="submit" name="ekle" value="EKLE" />&nbsp;<input type="reset" name="sil" value="TEMİZLE" /><a href="giris2.php">GERİ DÖN</a>
</form>
</div>
</body>
</html>


<?php
include("ayar.php");
if(isset($_POST["ekle"]))
{
$kulad=@$_POST["kulad"];
$ksifre=@$_POST["ksifre"];
$adsoyad=@$_POST["adsoyad"];
$blok=@$_POST["blok"];
$daire=@$_POST["daire"];
$tel=@$_POST["tel"];

$sec=mysql_query("select * from kullanici");
while($dizi=mysql_fetch_array($sec))
{
	
  if ($dizi['kulad']==$kulad   )
   {
	?>
 	<script>
  alert("Kullanıcı Adı Bulunmaktadır.");
</script>
 	<?php
   break;
   }
   else if($dizi['blok']==$blok && $dizi['daire']==$daire)
   {
   	?>
 	<script>
  alert("Blok ve Daire No Bulunmaktadır.");
</script>
 	<?php
   }
 
   else
   {
   	$kekle=mysql_query("insert into kullanici (sno,kulad,ksifre,adsoyad,blok,daire,tel) values
   	('','$kulad','$ksifre','$adsoyad','$blok','$daire','$tel') ");
	break;
   }
}
 if(isset($kekle))
 {
 	?>
 	<script>
  alert("Ekleme İşlemi Başarılı.");
</script>
 	<?php
 }
 else
 {
 	?>
 	<script>
  alert("Ekleme İşlemi Başarısız");
</script>
 	<?php
 }
}
	



?>