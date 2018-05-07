<html>
<head><title>Login</title></head>
<body>
	<?php
		$loginname=$_REQUEST["login"];
		$userpassword=$_REQUEST["new_password"];
		
			$connection=mysql_connect("localhost","root","");
			$db=mysql_select_db("test",$connection);
			
			$query="SELECT * from user_login";
			$result=mysql_query($query);
			
			$found=0;
			while($row=mysql_fetch_array($result))
			{
				if($row['name']==$loginname && $row['password']==$userpassword)
					$found=1;
			}
			if($found==1)
				echo "Login Successfully";
			else
				echo "Login Unsuccessfully";
			//mysql_close($db);	
		
	?>
</body>
</html>