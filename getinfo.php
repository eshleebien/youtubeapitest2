<!doctype html>
<html>
<head>
		<title>Get Youtube information</title>
</head>
<body>
	<header><h1></h1></header>
	<section>
		<article>
			<form method="GET" action="youtube-api-getter.php">
				<div>Insert ID: <input type ="search"id="id" name="id" placeholder ="Enter ID"></div> 
				<input type="submit" value="Submit">
			</form>
		</article>
		<article>
			<?php include 'youtube-api-getter.php'?>
		</article>
	</section>
</body>
</html>