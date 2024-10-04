<?php
echo"<pre>";
print_r($_POST);
echo"</pre>";

$message=$_POST["textmessage"];


file_put_contents("./message.txt",$message."\n", FILE_APPEND);

?>