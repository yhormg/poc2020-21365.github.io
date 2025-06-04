<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php $fp = fopen("../../../../../../../../../etc/passwd", "r") or die("Unable to open file!"); 
	echo fread($fp,filesize("test.txt"));
	?>
</body>
</html>
