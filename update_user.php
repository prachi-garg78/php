<html>
<head><title>Login</title></head>
<body>
	<?php
		$loginname=$_REQUEST["login"];
		$userpassword=$_REQUEST["old_password"];
		$newpassword=$_REQUEST["new_password"];
		
			$connection=mysql_connect("localhost","root","");
			$db=mysql_select_db("test",$connection);
			
			$query="Update user_login set password='$newpassword' where name='$loginname' and password='$userpassword';";
			$result=mysql_query($query);
			
			echo "insert successfully";
			//mysql_close($db);	
		
	?>
</body>
</html>