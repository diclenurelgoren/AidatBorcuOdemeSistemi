<?php
$kadi=@$_POST['kadi'];
$sifre=@$_POST['sifre'];
if (isset ($_POST['giris'])&& $kadi=="yonetim" && $sifre="123")
{
	echo "GİRİŞ YAPILDI,YÖNLENDİRİLİYORSUNUZ";
	header("refresh:2;url=giris2.php");
}
else
{
	echo"KULLANICI ADI VEYA ŞİFRE YANLIŞ.";
	header("refresh:2;url=giris.php");
}
?>