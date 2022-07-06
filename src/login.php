<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require_once "db.php";
session_start();
if(isset($_POST['username'])){
$username = htmlspecialchars(strip_tags($_REQUEST['username']));
$password = htmlspecialchars(strip_tags($_REQUEST['password']));
//$sql = "INSERT INTO users(username, password, email, trn_date) VALUES( :name, :password, :email, :trn_date)";
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql) or die($conn->errorInfo());
$result = $stmt->execute(['username'=>$username, 'password'=>$password]);
//$result = $stmt->execute($data);
$count = $stmt->fetchColumn();
if($count==1){
$_SESSION['username'] = $username;
header("Location: index.php");
exit();
}else{
echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
}
}else{
?>
<!-- Close the connection -->
<!-- $conn = null; -->
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
