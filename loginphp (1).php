<HTML>
<HEAD><TITLE>LOGIN php</TITLE></HEAD>
<BODY>
<?php
$logn=$_REQUEST["logintext"];
$passwd=$_REQUEST["passtext"];
$loginexp='/[a-zA-Z0-9\!\@\#\$\%]*/';
$passexp='/[a-zA-Z0-9\!\@\#\$\%]*/';
$error_array=array();
check_data();
if(count($error_array)!=0)
{
	show_error();
	show_page();
}
	else
	{
		handle_data();
	}
function handle_data()
{
	echo"<H1>Login Success</H1>";
	
}
function check_data()
{
	global $error_array;
	global $logn;
	global $passwd;
	global $loginexp;
	global $passexp;
	if($logn=="")
	{
		$error_array[]="<H2>login Blank</H2>";
	}
	elseif($passwd=="")
	{
		$error_array[]="<H2>Password Blank</H2>";
	}
	elseif(!preg_match($loginexp,$logn))
	{
		$error_array[]="<H2>Login format incorrect</H2>";
	}
	elseif(!preg_match($passexp,$passwd))
	{
		$error_array[]="<H2>Password format incorrect</H2>";
	}
	elseif(!preg_match('/abcde/i',$logn))
	{
		$error_array[]="<H2>login mismatch</H2>";
	}
		elseif(!preg_match('/abcde/i',$passwd))
	{
		$error_array[]="<H2>password mismatch</H2>";
	}
		elseif((strlen ($logn)<3)||(strlen($logn)>12))
	{
		$error_array[]="<H2>invalid Login size</H2>";
	}
		elseif((strlen ($passwd)<3)||(strlen($passwd)>12))
	{
		$error_array[]="<H2>invalid Password size</H2>";

	}
}
function show_error()
{
	global $error_array;
	foreach($error_array as $err)
	{
		echo $err,"<BR>";
	}
}
function show_page()
{
	echo"<form method='get' action='loginphp.php'>";
	echo"login<input type='text' name='logintext'>";
	echo"<BR>";
	echo"password<input type='text' name='passtext'>";
	echo"<BR>";
	echo"<input type='submit'><BR>";
	echo"</form>";
}
?>
</BODY></HTML>