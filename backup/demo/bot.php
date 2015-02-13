<meta charset="utf-8">
<?php

require('includes/db.php');
/*for($i=69078; $i<69082; $i++){
$link		= 'http://www.akparti.org.tr/site/'.$i.'';
$parcala 		= '@<h1 class="detail-title">(.*?)</h1>@si';
$spot	 		= '@<p class="lead">(.*?)</p>@si';

$botara		= file_get_contents($link);
preg_match_all($parcala,$botara,$baslik);
preg_match_all($spot,$botara,$aciklama);


if(!empty($baslik[1][0])){
$yaz = $baslik[1][0];
$manset = $aciklama[1][0];
$query = $db->query("INSERT INTO akparti_haberler(baslik,spot) values('$yaz','$manset')");


}

}
echo '<b>HABERLER BAŞARIYLA YAZILDI...</b><br/>';
$query = $db->query("select * from akparti_haberler", PDO::FETCH_ASSOC);
foreach( $query as $row ){ echo $row['baslik'].'<br/>'; }
*/

$link			= 'http://www.akparti.org.tr/site/';
$spot	 		= '@<h1 class="title">(.*?)</h1>@si';
$alt	 		= '@<div class="text">(.*?)</div>@si';
$resim	 		= '@<div class="image-wrapper">(.*?)</div>@si';

$botara		= file_get_contents($link);
preg_match_all($spot,$botara,$baslik);
preg_match_all($alt,$botara,$text);
preg_match_all($resim,$botara,$haber_resim);

/*echo'<pre>';
print_r($haber_resim);
echo'</pre>';*/

for($i=0; $i<18; $i++){
$sonuc = $baslik[1][$i]; 
$yazi = $text[1][$i]; 
$res = $haber_resim[0][$i]; 
echo "<label>'.$sonuc.'</label><br/>";	
echo "<label>'.$yazi.'</label><br/>";	
echo "<label>'.$res.'</label><br/>";	
}













	
?>