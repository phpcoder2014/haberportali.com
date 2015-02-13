<?php
	$aylar = array(
		'01' => "OCAK",
		'02' => "ŞUBAT",
		'03' => "MART",
		'04' => "NİSAN",
		'05' => "MAYIS",
		'06' => "HAZİRAN",
		'07' => "TEMMUZ",
		'08' => "AĞUSTOS",
		'09' => "EYLÜL",
		'10' => "EKİM",
		'11' => "KASIM",
		'12' => "Aralık"
		);
	$gunler = array(
		'Monday' => "Pazartesi",
		'Tuesday' => "Salı",
		'Wednesday' => "Çarşamba",
		'Thursday' => "Perşembe",
		'Friday' => "Cuma",
		'Saturday' => "Cumartesi",
		'Sunday' => "Pazar"
		);
	$simdiki_ay = date("m");
	$ay_cikti = $aylar[$simdiki_ay];
	
	$aktif_gun = date("l");
	$gun = $gunler[$aktif_gun];
	
	$bugun = date("d");
	$yil = date("Y");
	$saniye = date("h:i s");
	
?>