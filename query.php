<?php

	$conn = new PDO('sqlite:data.db');
	
	

	//$stmt = $conn->query("INSERT INTO modules (name, status) VALUES ('Contact', 1)");
	//$stmt = $conn->query("CREATE TABLE hero (title TEXT, subtitle TEXT, btn_text TEXT, btn_url TEXT, bg_img TEXT)");
	//$conn->exec("INSERT INTO hero (title, subtitle, btn_text, btn_url, bg_img) VALUES ('TITLE', 'DESCRIPTION', 'BUY NOW', 'http://google.com', 'https://i.pinimg.com/originals/6f/d6/8c/6fd68ced202b643053e9f281de52a016.jpg')");
	
	//'CREATE TABLE seo (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, description TEXT, keywords TEXT, head TEXT, footer TEXT)'
	// DROP TABLE about
	// INSERT INTO modules (name, status) VALUES ('Contact', 1)
	
	/*$stmt = $conn->query("SELECT title, subtitle, btn_text, btn_url, bg_img FROM hero");
	echo '<pre>';
	var_dump( $stmt->fetch(PDO::FETCH_ASSOC) );
	echo '</pre>';*/
	