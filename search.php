<?php
include('header.php');
?>

	<h1> Search Comics </h1>
    
    <p>
	
	<form name ="search" action = "search_results.php" method="POST">

		<label>
		  	Tag: <select name="genre">
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
		  	<option>January</option>
		  	<option>February</option>
		  	<option>March</option>
		  	<option>April</option>
		  	<option>May</option>
		 	<option>June</option>
		  	<option>July</option>
		  	<option>August</option>
		  	<option>September</option>
		  	<option>October</option>
		  	<option>November</option>
		  	<option>December</option>
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
		  	Keyword: <input type = "text" name = "tag" size = "30" maxlength="30" />
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