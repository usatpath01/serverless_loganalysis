<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
if(isset($_REQUEST['username'])){
$username = htmlspecialchars(strip_tags($_REQUEST['username']));
$password = htmlspecialchars(strip_tags($_REQUEST['password']));
$email = htmlspecialchars(strip_tags($_REQUEST['email']));
$trn_date = date("Y-m-d H:i:s");
//$sql = "INSERT INTO users(username, password, email, trn_date) VALUES( :name, :password, :email, :trn_date)";
$sql = "INSERT INTO users(username, password, email, trn_date) VALUES(?, ?, ? ,?)";
$stmt = $conn->prepare($sql) or die($conn->errorInfo());
$result = $stmt->execute(array($username, $password, $email, $trn_date));
//$result = $stmt->execute($data);
if($result){
echo "<div class='form'><h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a>
</div>";
}
}else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
