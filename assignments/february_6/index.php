<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Contact Form</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>
	<h1>Contact Form:</h1>
	<form action="endpoint.php" method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name"/><br>
		
		<label for="mail">Email:</label>
		<input type="email" name="mail" id="mail"/><br>
		
		<label for="number">Phone number:</label>
		<input type="number" name="number" id="number"/><br>
		
		<label for="comment">Comment:</label>
		<input type="text" name="comment" id="comment"/><br>
		<input type="submit" value="submit"/>
	</form>
</body>

</html>
