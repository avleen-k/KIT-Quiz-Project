<html>
<head>
<title>Registrieren</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
	<div class="signup-box">
		<h1> Registrieren </h1>
		<form action="config.php" method="POST">
		<label> Name </label>
		<input type="text" name="username" placeholder="">
		
		<label> Password </label>
		<input type="password" name="password" placeholder="">
		
		<label> Confirm Password </label>
		<input type="password" name="cpassword" placeholder="">
		
		<input type ="submit" name="submit_2" value="Submit">
		</form>
		<div class="account">Sie haben bereits ein Konto, dann klicken <a href="login.php">hier.</a></div>
	</div>
</body>
</html>
