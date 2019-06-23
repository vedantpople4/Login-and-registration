<?php
require 'database/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Front end Back end</title>
</head>
<body>
<?php
if(isset($_SESSION['username'])){
	echo "Welcome admin";
	
}
else{ 
	echo "Welcome admin";
}
?>
</body>
</html>  