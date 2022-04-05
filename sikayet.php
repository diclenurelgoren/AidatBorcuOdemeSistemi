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
.sikayet
{
	
}
        </style>

</head>
<body>
<div class="govde">
<div class="logo"><a href="index.php"><img src="img/logo.jpg" /></a></div>
<div class="menudivi">
<ul class="menu">
<li><a href="odeme.php">Aidat Borcu Ödeme</a></li>
<li class="aktif"><font color="#FFFFFF"><a href="sikayet.php">Şikayet</font></a></li>
<li><a href="giris.php">Yönetici Girişi</a></li>
</ul>
</div>
<div class="oturum"><h3><font color="#000000">Sikayet Etme Sebebinizi Detaylarıyla Açıklayınız</font></h3>
<form action="" method="post">
<b>KONU:</b><input type="text" name="konu" size="50" required/>
<b>AÇIKLAMA:</b><input type="text" name="acik"  size="50" required/>
<input type="submit" name="gonder" value="GÖNDER" />&nbsp;<input type="reset" name="temizle" value="TEMİZLE" />
</form>
</div>

</div>
</body>
</html>
<?php
include("ayar.php");
if(isset($_POST["gonder"]))
{
$konu=@$_POST["konu"];
$acik=@$_POST["acik"];

$ekle=mysql_query("insert into sikayet (idno,konu,mesaj) values('','$konu','$acik') ");

 if(isset($ekle))
 {
 	?>
 	<script>
  alert("Şikayetiniz Alınmıştır.");
</script>
 	<?php
 }
 else
 {
 	?>
 	<script>
  alert("Şikayetiniz Alınamadı Lütfen Tekrar Deneyiniz!!");
</script>
 	<?php
 }
}

?>