<?php
require_once("class.xcsrf.php");
$CSRFToken = new xcsrf;
?>
<!DOCTYPE html>
<html>
<head>
	<title>example csrf token</title>
</head>
<body>
<form method="post" action="post.php">
	<input type="nama" name="nama">
	<input type="alamat" name="alamat">
	<input type="hidden" name="X-Csrf-Token" value="<?php echo $CSRFToken->generate_token()?>">
	<input type="submit" name="Submit">
</form>
</body>
</html>