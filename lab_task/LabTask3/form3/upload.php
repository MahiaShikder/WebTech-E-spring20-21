<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p{
			border-bottom: 3px bold;
		}
	</style>
	<title>Upload Profile Pic</title>
</head>
<body>
	<div>
	<form action="" method="POST">
		
		<fieldset style="width: 380px">
			<legend style="font-weight: bold;font-size: 20px">Profile Picture</legend>
			
				<img style="width: 210px" src="pic2.jpg" alt="">
			<input type="file" name="picture" value="<?php echo $picture;?>">
            <br><span style="color:red"><?php $err_picture=""; echo $err_picture;?></span>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	</div>

	<?php 
		$err_picture="";
        $picture="";

		if(isset($_POST['submit'])) 
		{
			if(empty($_POST['picture']))
			{
				$err_picture ="Please Choose Picture";
			}
			else
			{
				$picture=htmlspecialchars($_POST['picture']);
				$_POST['picture'] = $picture;
			}
		}
	 ?>

	</body>
	</html>