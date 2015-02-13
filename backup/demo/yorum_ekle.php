<meta charset="utf-8">
<?php

require("includes/db.php");
if($_POST){
$haberID	= $_GET['id'];
$adiSoyadi	= mysql_real_escape_string(trim($_POST["input-name"]));
$email		= mysql_real_escape_string(trim($_POST["input-email"]));
$web		= mysql_real_escape_string(trim($_POST["input-homepage"]));
$yorumText	= mysql_real_escape_string(trim($_POST["text-comment"]));
$zaman		= date("d.m.y h:i:s");

$query = $db->query("insert into tbl_slideryorum (haberID,adiSoyadi,email,web,yorumText,zaman) values('$haberID','$adiSoyadi','$email','$web','$yorumText','$zaman')");
if($query){
echo '<script>alert("Yorum Gönderildi.");</script>';
header('refresh: 0; url=haber_detay.php?id='.$haberID.''); 
}
else {
echo 'bir problem vardır';
}
}
?>