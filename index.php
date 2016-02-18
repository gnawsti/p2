<!DOCTYPE html>
<html>
<head>
	<title>xkcd Password Generator</title>
</head>
<body>
	<h1>xkcd Password Generator</h1>

	<form method="POST" action="index.php">
		Number of Words (max 9):<input type="number" value=" " name="words" min="1" max="9" step="1"><br>
		<input type="checkbox" name="number" value="true"> Add a Number<br>
		<input type="checkbox" name="symbol" value="true"> Add a Symbol<br>
		Separator: <input type="radio" name="separator" value="-" checked> -
		<input type="radio" name="separator" value="~"> ~
		<input type="radio" name="separator" value="."> .
		<input type="radio" name="separator" value=""> None <br>
		<input type="submit" value="Get a password">
	</form>
</body>
</html>