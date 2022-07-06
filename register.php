<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
    die;
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

	<title>uCODEmy Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" >Create your account</p>
			<div class="input-group">
				<p class="label" style="margin-bottom: 3px;">Username</p>
				<input type="text" placeholder="Enter your username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<p class="label" style="margin-bottom: 3px; margin-top: 40px;">E-mail</p>
				<input type="email" placeholder="Enter your e-mail" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<p class="label" style="margin-bottom: 3px; margin-top: 40px;">Password</p>
				<input type="password" placeholder="Enter your password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
            	<p class="label" style="margin-bottom: 3px; margin-top: 40px;">Repeat Password</p>
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="button">
				<button name="submit" class="btn">Sign Up</button>
			</div>
			<p class="login-register-text">Already have an account? <a href="login.php">Log In</a></p>
		</form>
	</div>
</body>
</html>