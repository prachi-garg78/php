<html>
<head><title>login form</title></head>
<body>
<?php

$logn=$_REQUEST["logintext"];
$passwd=$_REQUEST["passtext"];
$lognexp='/[a-zA-Z0-9\!\@\#\$\%\^\&\*]*/';
$passwdexp='/[a-zA-Z0-9\!\@\#\$\%\^\&\*]*/';

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
  echo "<H1>Login Successful<H1>";

}
function check_data()
{
 global $error_array;
 global $logn;
 global $passwd;
 global $lognexp;
 global $passwdexp;
 if($logn=="")
   $error_array[]="<h1> login blank</h1>";
 elseif($passwd=="")
   $error_array[]="<h1> password blank</h1>";
 elseif(!preg_match($lognexp,$logn))
   $error_array[]="<h1> incorrect login format</h1>";
 elseif(!preg_match($passwdexp,$passwd))
   $error_array[]="<h1> incorrect password format</h1>";
 elseif(strlen($logn)<3 || strlen($logn)>12)
   $error_array[]="<h1> incorrect login size</h1>";
  elseif(strlen($passwd)<3 || strlen($passwd)>12)
   $error_array[]="<h1> incorrect password size</h1>";
  elseif(!preg_match('/abcd/i',$logn))
   $error_array[]="<h1> incorrect login </h1>";
elseif(!preg_match('/abcd/',$passwd))
   $error_array[]="<h1> incorrect password</h1>";
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

echo "<form method='get' action='loginphp.php'>";
echo "Login<input type='text' name='logintext'><BR>";
echo "Password<input type='text' name='passtext'><BR>";
echo "<input type='submit'>";
echo "</form>";



} 



?>

</form>
</body>
</html>