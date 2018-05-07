<HTML>
<HEAD><TITLE>PALINDROME</TITLE></HEAD>
<body>
<?php
echo "PALINDROME <BR>";
 $flag=0;
 $str="hello";
 $stringLength=strlen($str);
for ( $i=0,$j=$stringLength-1;$i<($stringLength/2);$i++,$j--)
{
	if(substr($string,$i,1)!=substr($string,$j,1)
	{
		flag=1;
		break;
		
	}
}
	if($flag==0)
	{
		echo "YES STRING IS A PALINDROME";
	}
	else if($flag==1)
	{
		echo "NO STRING IS NOT APALINDROME";
	}

 ?>
 </body>
 </html>