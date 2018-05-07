<html>
<head>
<title> FACTORIAL</title>
</head>
<body>
<?php
$C=5;
function fact($C)
{
  for($i=$C-1;$i>0;$i--)
  $C= $C*$i;
  echo "$C";
}
echo fact(5);
?>
</body>
</html>
