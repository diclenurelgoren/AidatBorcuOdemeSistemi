<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aidat Borcu Ödeme</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.listeleme
{
	width: 1000px;
    height: auto;
	clear: both;
	
}
table {
border-collapse: collapse;
width:1000px;
height: auto;
margin-bottom: 40px;
margin-left: 10px;
font-size: 15px;
}
 td,th {
border: 1px solid #ddd;
padding: 8px;
}
  tr:nth-child(even){background-color: #f2f2f2;}
 
 tr:hover {
background-color: #5e97a2;
color:#fff;
}
 
 th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #2c3e50;
color: white;
}
</style>
</head>

<center>
<div class="listeleme"><h2><center> <font color="#C00">KULLANICILAR</font></center></h2>

<?php
include("ayar.php");
$sec=mysql_query("select *FROM odeme");
echo'<table border="1" class="tablo"><tr>';
echo"<th>Sno</th><th>Kullanıcı Adı</th><th>Ad Soyad</th><th>Tutar</th>";
while($dizi=mysql_fetch_array($sec))
{
	echo"<tr><td>".$dizi['sno']."</td>";
	echo"<td>".$dizi['kulad']."</td>";
	echo"<td>".$dizi['adsoyad']."</td>";
	echo"<td>".$dizi['tutar']."</td>";

}	
echo"<tr><td colspan='12' align='center'><a href='giris2.php'><font color=#000000>SAYFAYA GERİ DÖN...</font></a></td></table>";	
?>
</div>
</center>
</html>


