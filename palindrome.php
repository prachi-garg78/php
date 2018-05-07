<HTML>
<HEAD><TITLE>STAR</TITLE></HEAD>
<body>
<? php
echo"PALINDROME";
 $flag=0;
 $string="HELLO MY YM OLLEH";
 $stringLength=strlen($string);
for ( $i=0,$j=$stringLength;$i<($stringLength/2);$i++,$j--)
{
	if(substr($string,$i,1)!=substr($string,$j,1)
	{
		echo"CHECK";
		$flag=1;
		break;
	}
}
	if($flag==0)
	{
		echo"YES STRING IS A PALINDROME";
	}
	else if($flag==1)
	{
		echo"NO STRING IS NOT A PALINDROME";
	}

 ?>
 </body>
 </html>