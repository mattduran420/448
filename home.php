<?php include('header.php'); ?>
<?php //include('sidebar.php'); ?>
<a href="comment_comic.php?test=5">test</a>
<?php var_dump($_GET); ?>

<form action="collaborate.php" method="post" enctype="multipart/form-data">
	Your Photo: <input type="file" name="photo" size="25" />
	<input type="submit" name="submit" value="Submit" />
</form>
<!-- Kat Pfeiffer -->


<?php include('footer.php'); ?>