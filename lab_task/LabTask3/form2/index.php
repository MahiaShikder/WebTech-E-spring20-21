<!DOCTYPE html>
<html>
<head>
	<title>LabTask 3</title>
</head>
<body>
	<form action="" method="_POST">
		
		<fieldset style="width: 380px">
			<legend style="font-weight: bold;font-size: 20px">CHANGE PASS</legend>
			<div>
			Current Pass :<input type="text" name="currentpassword">
			
			<br>
			<br>
			New Pass:
			<td>
			<input style="margin-right: 3px" type="text" name="newpassword"></td>
			
			<br>
			<br>

			Re-type Pass:
			<td >
			<input style="margin-right: 3px; color: blue;" type="text" name="pass"></td>


			<br>
			<br>
			<hr>
			
			<a style="border-bottom: 2px ash" href="#"></a>


			<input type="Submit"> 
			</div>
           
		</fieldset>
	</form>
<?php


		$currentPassword="";
		$err_currentPassword="";

		$newPassword="";
		$err_newPassword="";

		$retypePassword="";
		$err_retypePassword="";

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['currentPassword']))
			{
				$err_currentPassword="*Password Required";
			}
			else
			{
				$currentPassword=htmlspecialchars($_POST['currentPassword']);
				$_POST['currentPassword'] = $currentPassword;				
			}
			if(empty($_POST['newPassword']))
			{
				$err_newPassword="*New Password Required";
			}
			else 
			{
				
				if ( $_POST['newPassword'] == $_POST['currentPassword'] )
				{
					$err_newPassword="*New Password should not be same as the Current Password";
				}
				else
				{
					$newPassword=htmlspecialchars($_POST['newPassword']);
					$_POST['newPassword'] = $newPassword;
				}
			}
			if(empty($_POST['retypePassword']))
			{
				$err_retypePassword="*Retype Password Required";
			}
			else
			{
				if ( $_POST['newPassword'] != $_POST['retypePassword'] )
				{
					$err_retypePassword="*New Password must match with the Retyped Password";
				}
				else
				{
					$retypePassword=htmlspecialchars($_POST['retypePassword']);
					$_POST['retypePassword'] = $retypePassword;
				}
			}
		}
	 ?>

</body>
</html>