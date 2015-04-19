<?php
include('header.php');
?>

  <title> Search Comics </title>  
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>

	<div class="main">
	<div id="content">
	<h1> Search Comics </h1>
    
    <p>
	
	<form name ="searchform" action = "success.html">
	
		<label>
		  	Enter search keywords: <input type = "text" name = "search" size = "30" maxlength="30" />
		</label>
		
		<br />
		<br />

		<label>
		  	Search by tag: <select name="tags">
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
		  	Day <select name="day">
		  	<option>1</option>
		  	<option>2</option>
		  	<option>3</option>
		  	<option>4</option>
		  	<option>5</option>
		  	<option>6</option>
		  	<option>7</option>
		  	<option>8</option>
		  	<option>9</option>
		  	<option>10</option>
		  	<option>11</option>
		  	<option>12</option>
		  	<option>13</option>
		  	<option>14</option>
		  	<option>15</option>
		  	<option>16</option>
		  	<option>17</option>
		  	<option>18</option>
		  	<option>19</option>
		  	<option>20</option>
		  	<option>21</option>
		  	<option>22</option>
		  	<option>23</option>
		  	<option>24</option>
		  	<option>25</option>
		  	<option>26</option>
		  	<option>27</option>
		  	<option>28</option>
		  	<option>29</option>
		  	<option>30</option>
		  	<option>31</option>
			</select>
		</label>

		<label>
			Year <select name="year">
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
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

		<input type = "submit" value="Submit" />

	</form>

	</p>

	<br />
	<br />
		
<?php
include('footer.php');
?>