<?php
  
  //Create database to collect post and rating
  $db = mysql_connect("studentdb.gl.umbc.edu", "nseri1", "nseri1");
  $comment = $_POST('comment_comic');
  $rating = $_POST('rating');
  
  $contructed_query = "INSERT INTO comment_and_rate(username, comment, rating) VALUES ('$username', 						'comment', 'rating')";
  $select_query = "SELECT * FROM comment_and_rating WHERE comment_comic = '$comment'";
  $result = mysql_query($select_query);
?>
