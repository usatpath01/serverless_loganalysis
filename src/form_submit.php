<?php
$hostname	= "mysql";
$dbname		= "helloworld";
$username	= "helloworld";
$password	= "db-password";

try {

	$conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );

	// Configure PDO error mode
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	echo "Connected successfully";
}
catch( PDOException $e ) {

	echo "Failed to connect: " . $e->getMessage()."	". $e.getCode();
}

// Perform database operations
function saveData($name, $email, $message){
	global $conn;
	// echo $name." ";
        // echo $email." ";
        // echo $message." ";

	$data = [
	   'name'=> htmlspecialchars(strip_tags($name)),
	   'email'=> htmlspecialchars(strip_tags($email)),
	   'message'=> htmlspecialchars(strip_tags($message)),
	];
	$sql = "INSERT INTO test(name, email, message) VALUES( :name, :email, :message)";
	$stmt = $conn->prepare($sql) or die($conn->errorInfo());
	$status = $stmt->execute($data);
	if($status){
	return '<h3 style="text-align:center;">We will get back to you very shortly!</h3>';
	}
}
if( isset($_POST['submit'])){
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$message = htmlentities($_POST['message']);
	//then you can use them in a PHP function. 
	$result = saveData($name, $email, $message);
	echo $result;
}
else{
	echo '<h3 style="text-align:center;">A very detailed error message ( ͡° ͜ʖ ͡°)</h3>';
}
// Close the connection
$conn = null;
