<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php


$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "kleider";

// Exception Handling
	
try{
	$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname) or throwException("error");

}
catch(Exception $e){
	echo 'Caught Exception '. $e->getMessage();
	echo 'On line '. $e->getLine();
	echo 'Stack trace: ';
	print_r($e->getTrace());
}

?>

</body>
</html>