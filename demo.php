<?php
$offset=0;
if(isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])) {

	 $text = $_POST['text'];
	 $search = $_POST['search'];
	 $replace = $_POST['replace'];
	 $strlen = strlen($search);

	if(!empty($text) && !empty($search) && !empty($replace)) {
		//echo "OK";
		while ($strpos = strpos($text, $search, $offset)) {
			# code...
			 $offset = $strpos + $strlen;
			 $text = substr_replace($text, $replace, $strpos, $strlen);

		}

		echo $text;

	}

	else {
		echo "Please fill all fields";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="demo.php" method="post">
		<textarea name="text" rows="10" cols="20"></textarea><br><br>

		Search:<input type="text" name="search" /><br><br>
		Replace:<input type="text" name="replace" /><br><br>
		<input type="submit" name="submit" value="Find and Replace">


	</form>
</body>
</html>