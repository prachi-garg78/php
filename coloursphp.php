<HTML>
<HEAD><TITLE>Colors php</TITLE></HEAD>
<BODY>
<?php
$inputString=$_REQUEST["number"];
function handle_data()
{	
	global $inputString;
	$number=array();
	$number=explode(",",$inputString);
	print_r($number);
	echo"<ul>";
        sort($number);
	foreach($number as $value)
	{
		echo "Number are:",$value,"<br>";
	}
	echo"</ul>";
        
        echo "Second smallest number is: ", $number[1]; 
}
handle_data();
?>
</BODY></HTML>