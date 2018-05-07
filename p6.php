<html>
<head>
<title> PALINDROME</title>
</head>
<body>
<?php
$sh="qwertyuioppoiuytrewq";
function pal($sh)
{
	$i=0;$j=strlen($sh)-1;
	while($i<$j)
	{
		echo substr($sh,$i,1);
		echo substr($sh,$j,1);
		echo "---";
		if(substr($sh,$i,1)==substr($sh,$j,1))
		{
			
			$i++;
			$j--;
		}
		else 
		break;
	}
	if($i>=$j)
	{
		echo "oh yeaah";
	}
}
echo pal($sh);
?>
</body>
