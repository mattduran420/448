<?php include('header.php'); ?>
<?php //include('sidebar.php'); ?>
<a href="?test=5">test</a>
<?php
parse_str($_SERVER['QUERY_STRING']);?>

<?php include('footer.php'); ?>