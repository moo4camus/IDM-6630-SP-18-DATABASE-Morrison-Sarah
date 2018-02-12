<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 	<link rel="stylesheet" href="css/style.css">
 	<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto');
</style>
    <title>Sarah Morrison's Top 10 Albums</title>
  </head>
  <body>
		
		<?php
		  
		  //Database

		  $db = "week03";
		  $host = "172.21.0.2";
		  $un = "idm6630";
		  $pw = "idm6630";

		  try {
		  	$conn = new PDO("mysql:host=$host;dbname=$db", $un, $pw);
		  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  		//echo "Connected Successfully";
		  }

		  catch(PDOException $e) {
		  		echo "Connection Failed: " . $e->getMessage();
		  }

		  //Display

		echo "<h1>Sarah Morrison's Top 10 Albums</h1>";
		echo "<h2>(In no particular order)</h2>";

		  $query = "SELECT * FROM albums";

		  foreach ($conn->query($query) as $album) {
		  	echo "<div>";
		  	echo "<ul>";
		  	echo "<li><img src='" . $album['cover'] . "'</li>";
		  	echo "<li><h3>" . $album['title'] . "</h3></li>";
		  	echo "<li><h4>" . $album['artist'] . ", " . $album['year'] . "</h4></li>";
		  	echo "</ul>";
		  	echo "</div>";
		  }

		  
		?>
	</body>
</html>

