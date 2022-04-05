<?php
include("ayar.php");
//$id=$_GET["id"];
$silinecekID=@$_GET["id"];
$sonuc=mysql_query("delete from kullanici where sno=".$silinecekID);

if($sonuc>0)
{
	echo "Başarıyla silindi ,2 sn. sonra yönlendirileceksiniz.";
	header("refresh:2;url=sil.php");
}
else{
	header("refresh:2;url=sil.php");
}
?>