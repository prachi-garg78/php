<HTML>
<HEAD><TITLE>sum of first n odd natural numbers</TITLE></HEAD>
<body>
<?php
function fact($num)
{
	if ($num>1)
	{
		return $num*fact($num-1);
	}
	else if($num==1)
	{
		return 1;
	}
}
$factorial=fact(5);
echo $factorial;
 ?>
 </body>
 </html>