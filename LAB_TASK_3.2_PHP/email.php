<?php
if(isset($_REQUEST['msg'])){
	echo "invalid email";
}
?>

<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="emailCheck.php">
		Email:<input type="email" name="email"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>