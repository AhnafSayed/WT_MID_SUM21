<?php

	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	
	if	($_SERVER["REQUEST_METHOD"]=="POST")
		
//--Username--//

		{
          if (strlen($_POST["username"])<6)
			{
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}

//--Password--//

			if(strlen($_POST["password"])>8)
			{
				$pass=$_POST["password"];
			if ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$err_password="Password must contain at least 8 characters and 1 special character!";
				}
				for ($i=0;$l<strlen($_POST["password"]);$i++)
				{
					if (ctype_lower($_POST["password"][$i]))
					{
						break;
					}
					else
					{
						$err_password="Password must contain minimum 1 lowercase alphabet!";
					}
				}
				for ($j=0;$m<strlen($_POST["password"]);$j++)
				{
					if (ctype_upper($_POST["password"][$j]))
					{
						break;
					}
					else
					{
						$err_pass="Password must contain minimum 1 uppercase alphabet!";
					}
				}
				for($k=0;$n<strlen($_POST["password"]);$k++)
				{
					if(is_numeric($_POST["password"][$k]))
					{
						break;
					}
					else
					{
						$err_password="Password must contain minimum 1 numeric character!";
					}
				}
			}
			else	
			$err_password="Password length must be 8 or longer!";


		echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["password"])."<br>";

		}
?>		



<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width:500px" "height:300px">
		<legend align="center"><h1><b>Login</b></h1></legend>
			<table>			
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<br>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
				<td colspan="3" align="center">
				<input type="Submit" value="Login">
				</td>
				</tr>
				<br>
				<tr>
				<td><h5>Don't have an account?</h5><a href="Signupoption.php"><h5>Sign Up!</h5></a></td>
				</tr>
			</table>
	    </fieldset>
		</form>
		</center>
	</body>
</html>