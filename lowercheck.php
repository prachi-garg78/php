<HTML>
<HEAD><TITLE>LOWER CHECK</TITLE></HEAD>
<body>
<?php
echo "LOWER CHECK <BR>";
 $flag=0;
 $str="HELLO";
 $stringLength=strlen($str);
 if(ctype_lower($str)==1)
 {
	 echo "string is all lower case ";
 }
 else
 {
	 echo "string is not all lower case";
 }
/*for ( $i=0;$i<=($stringLength);$i++)
{
	$check=substr($str,$i,1);
	if(is($check)==0))
	{
		flag=1;
		break;
		
	}
}
	if($flag==0)
	{
		echo "YES STRING IS IN LOWER CASE";
	}
	else if($flag==1)
	{
		echo "NO STRING IS NOT IN LOWER CASE";
	}
*/
 ?>
 </body>
 </html>