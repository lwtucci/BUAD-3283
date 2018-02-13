<?php
	$name = $_REQUEST['name'];
	$mail = $_REQUEST['mail'];
	$number = $_REQUEST['number'];
	$comment = $_REQUEST['comment'];
	 
	echo("Name: " . $name);
	echo("<br>Email: " . $mail);
	echo("<br>Phone number: " . $number);
	echo("<br>Comment: " . $comment);
?>

