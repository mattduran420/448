<?php
include('header.php');
?>

	<h1> Search Comics </h1>
    
    <p>
	
	<form name ="search" action = "search_results.php" method="POST">

		<label>
		  	Genre: <select name="genre">
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
		</label>

		<br />
		<br />
		
		<label>
		  	Date: Month <select name="month">
		  	<option disabled selected></option>
		  	<option value="01">January</option>
		  	<option value="02">February</option>
		  	<option value="03">March</option>
		  	<option value="04">April</option>
		  	<option value="05">May</option>
		 	<option value="06">June</option>
		  	<option value="07">July</option>
		  	<option value="08">August</option>
		  	<option value="09">September</option>
		  	<option value="10">October</option>
		  	<option value="11">November</option>
		  	<option value="12">December</option>
			</select>
		</label>

		<label>
			Year <select name="year">
			<option disabled selected></option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</opion>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			</select>
		</label>

		<br />
		<br />

		<label>
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

		</label>
		
		<br />
		<br />

		<input type = "submit" value="Submit"/>
		<input type = "reset" value="Reset"/>

	</form>

	</p>

	<br />
	<br />
		
<?php
include('footer.php');
?>