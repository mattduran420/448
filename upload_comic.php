<?php
include('header.php');
?>
	<div id = "upload-form">
	<form action="process_upload.php" method="post" enctype="multipart/form-data">
		Genre: <select name = "genre">
			<option disabled selected></option>
			<option>Music</option>
			<option>Games</option>
			<option>Movies</option>
			<option>Food</option>
			<option>Sports</option>
			<option>Travel</option>
			<option>Comedy</option>
			<option>Entertainment</option>
			<option>Cars/Auto</option>
			<option>Education</option>
			<option>Animals/Wildlife</option>
			<option>Science</option>
			<option>Other</option>
			</select>
			<br /><br />
		Comic name: <input type = "text" name = "comic_name" /><br /><br />

		Tag: <select name="tag">
		  	<option disabled selected></option>
		  	<option>Funny</option>
		  	<option>Stupid</option>
		  	<option>Sad</option>
		  	<option>Violent</option>
		  	<option>Conspiracy theories</option>
		  	<option>Obama</option>
		  	<option>Lizard People</option>
		  	<option>Summer</option>
		  	<option>Winter</option>
		  	<option>Spring</option>
		  	<option>Fall</option>
		  	<option>Spooky</option>
		  	<option>Spoopy</option>
		  	<option>Life is good</option>
		  	<option>Feminism</option>
		  	<option>Amish</option>
		  	<option>Zimbo</option>
		  	<option>Pizza</option>
		  	</select>
		  	<br /><br />

		Status :<select name = "status">
			<option disabled selected></option>
			<option value = '1'>Draft</option>
			<option value = '2'>Published</option>
		</select>
		<br /><br />	
		Your Comic: <input type="file" name="photo" size="25" /><br /><br />
		

		<input type="submit" name="submit" value="Submit" />
	</form>
	</div>


<?php
include('footer.php');
?>