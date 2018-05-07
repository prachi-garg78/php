<HTML>
<HEAD><TITLE>String php</TITLE></HEAD>
<BODY>
<?php
$inputString=$_REQUEST["birthday"];
$birthday=strtotime($inputString);
$d2=time();
$datediff=$birthday-$d2;
$days=floor($datediff/60/60/24);
echo "Days left are",$days;
?>
</BODY></HTML>