<?php  include_once('header.php'); 
		$err_picture="";
        $picture="";

		if(isset($_POST['submit'])) 
		{
			if(empty($_POST['Picture']))
			{
				$err_picture ="Please Choose a Picture";
			}
			else
			{
				$picture=htmlspecialchars($_POST['Picture']);
				$_POST['Picture'] = $picture;
			}
		}
	 ?>
<section style="width: 80%;
	float: left;
	padding-left: 35px;>
    
	<form action="" method="POST" enctype = "multipart/form-data">
		<fieldset style="width: 380px">
			<legend style="font-weight: bold;font-size: 20px">PROFILE PICTURE</legend>
            <img style="width: 180px" src="default.png" alt="">
			<input type="file" name="picture" value="<?php echo $picture;?>">
            <br><span style="color:red"><?php echo $err_picture;?></span>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</section>
<?php include_once('footer.php'); ?>