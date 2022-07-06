<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>uCODEmy Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="heading">Welcome Back!</p>
			<p class="login-text">Login into your account</p>
			<div class="input-group">
				<p class="label" style= "margin-bottom: 3px">E-mail</p>
				<input type="email" placeholder="Enter your e-mail account" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<p class="label" style="margin-top: 38px; margin-bottom: 3px;">Password</p>
				<input type="password" placeholder="Enter your password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="button">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Create an account? <a href="register.php" >Sign up</a></p>
		</form>
	</div>
</body>
</html>