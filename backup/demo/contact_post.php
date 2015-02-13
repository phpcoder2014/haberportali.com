<?php
if($_POST) {
include_once("includes/db.php");
$adi		= mysql_real_escape_string(trim($_POST["adi"]));
$soyadi		= mysql_real_escape_string(trim($_POST["soyadi"]));
$telefon	= mysql_real_escape_string(trim($_POST["telefon"]));
$eposta		= mysql_real_escape_string(trim($_POST["eposta"]));
$mesaj		= mysql_real_escape_string(trim($_POST["mesaj"]));
$zaman		= date("d.m.y h:i:s");

$query = $db->query("insert into tbl_irtibat (adi,soyadi,telefon,eposta,mesaj,zaman) values('$adi','$soyadi','$telefon','$eposta','$mesaj','$zaman')");
if($query){
echo '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Tebrikler!</strong> Mesajınız başarılı bir şekilde gönderildi.
    </div>';
}
}
else {
echo "İşlem hatası yapıldı.";
}
?>