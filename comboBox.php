<HTML>
<HEAD><TITLE>Combo Box php</TITLE></HEAD>
<BODY>
<?php
$str=$_REQUEST["language1"];
function handle_data()
{
	global $str;
	foreach($str as $value)
	{
		switch($value)
		{
			case "English":echo "Hello";
			break;
			case "Hindi": echo "Namaste";
			break;
			case "Spanish": echo"Hola";
			break;
		}
	}
}
handle_data();
?>
</BODY></HTML>
