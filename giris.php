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
    padding: 10px 70px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	margin-bottom:20px;
    color:#FFF;
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
</style>
</head>
<body>
<div class="govde">
<div class="logo"><a href="index.php"><img src="img/logo.jpg" /></a></div>
<div class="menudivi">
<ul class="menu">
<li><a href="odeme.php">Aidat Borcu Ödeme</a></li>
<li><a href="sikayet.php">Şikayet</a></li>
<li class="aktif"><a href="giris.php"><font color="#FFFFFF">Yönetici Girişi</font></a></li>
</ul>
</div>

<div class="oturum"><h3><font color="#000000">Yönetim Paneline Erişmek İçin Oturum Açınız</font></h3>
<form action="giriskontrol.php" method="post">
<b>KULLANICI ADI:</b><input type="text" name="kadi" size="50" placeholder="yonetim" required/>
<b>ŞİFRE:</b><input type="password" name="sifre"  size="50" placeholder="123" required/>
<input type="submit" name="giris" value="GİRİŞ" />&nbsp;<input type="reset" name="sil" value="SİL" />
</form>
</div>
</div>
</body>
</html>

