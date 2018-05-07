<HTML>
<HEAD><TITLE>String php</TITLE></HEAD>
<BODY>
<?php
$inputString=$_REQUEST["enteredString"];
$searchString=$_REQUEST["searchString"];
function check_data()
{
	global $inputString;
	global $searchString;
if(preg_match("/^([a-z]+\s[a-z]+)*$/",$inputString))
{
	echo "there are spaces in the string<BR>";
}
else
{
	echo "There are no spaces in the string<BR>";
}
if(preg_match("/$searchString/",$inputString))
{
	echo "The word exist in the string";
}
else
{
	echo "The word doesnt exist in the string";
}
}
check_data();
?>
</BODY></HTML>
