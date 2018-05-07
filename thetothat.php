<HTML>
<HEAD><TITLE>The to That php</TITLE></HEAD>
<BODY>
<?php
$inputString=$_REQUEST["info"];
function handle_data()
{	
	global $inputString;
	$replace="that";
	$str2=preg_replace("/the/",$replace,$inputString);
	echo $str2;
}
handle_data();
?>
</BODY></HTML>