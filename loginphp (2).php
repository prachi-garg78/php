<html>
<head><title>login form</title></head>
<body>
<?php

$logn1=$_REQUEST["logintext"];
$passwd1=$_REQUEST["passtext"];
$lognexp1='/[a-zA-Z0-9\!\@\#\$\%\^\&\*]*/';
$passwdexp1='/[a-zA-Z0-9\!\@\#\$\%\^\&\*]*/';

$error_array1=array();
check_date();

if(count($error_array1)!=0)
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
 global $error_array1;
 global $logn1;
 global $passwd1;
 global $lognexp1;
 global $passwdexp1;
 if($logn1=="")
   $error_array1[]="<h1> login blank</h1>";
 elseif($passwd1=="")
   $error_array1[]="<h1> password blank</h1>";
 elseif($passwd1=="")
   $error_array1[]="<h1> password blank</h1>";
 elseif(!preg_match($lognexp1,$logn1))
   $error_array1[]="<h1> incorrect login format</h1>";
 elseif(!preg_match($passwdexp1,$passwd1))
   $error_array1[]="<h1> incorrect password format</h1>";
 elseif(strlen($logn1)<3 || strlen($logn1)>12)
   $error_array1[]="<h1> incorrect login size</h1>";
  elseif(strlen($passwd1)<3 || strlen($passwd1)>12)
   $error_array1[]="<h1> incorrect password size</h1>";
  elseif(!preg_match('/abcde/i',$logn1))
   $error_array1[]="<h1> incorrect login </h1>";
elseif(!preg_match('/abcde/',$passwd1))
   $error_array1[]="<h1> incorrect password</h1>";
}
function show_error()
{
  global $error_array1;
  foreach($error_array1 as $err1)
  {
    echo $err1,"<BR>";
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