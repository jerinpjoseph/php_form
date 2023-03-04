<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link href="Images\form 16+16.jpg" rel="icon" >
    <link href="Images\form 32+32.jpg" rel="icon">
    <link href="Images\form 180+180.jpg" rel="apple-touch-icon">
</head>
<body>
	<h1>Submit The Form</h1>
	<form method="post" action="submit.php">
		<label for="username">Username : ::::</label>
		<input type="text" id="username" name="username" required><br><br>

		<label for="email">Email : ::::::::::</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password : :::::</label>
		<input type="password" id="password" name="password" required><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>