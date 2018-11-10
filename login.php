<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
		table, th,td{
			border: 2px solid black;
			border-collapse: collapse;
			padding: 10px;
		}

		input[type=button], input[type=submit]{
			background-color: #4caf50;
			color: white;
			margin: 4px 2px;
			padding: 16px 32px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<h1>welcome to Login page for ZoomAV website</h1>
<img src="http://localhost/login/download.png" width="150">
<p>
	<form action="process2.php" method="post">
		
		Email:      <input type="text" name="email" required=""> use lower case character only.<br><br>

		Password:  <input type="password" name="password" required=""><br><br>
		<input type="submit" name="submit" value="LOGIN" class="button">
		
	</form>
</p>

	
</body>
</html>