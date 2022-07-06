<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
</head>
<body style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(./images/wallpaper2.jpg); width:100%; height: 100vh;  background-position: center; background-size: cover; ">
	<section>
		<div class="text-container" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)); width: 900px; height: 500px; display: flex; justify-content: center; position: absolute; transform: translate(17%, 9%);">
			<div class="centered-text" style="text-align: center; left: 50%; top: 50%; transform: translate(0, 15%);">
				<img src="./images/profile.png" style="position: relative; width: 150px; height: 150px; margin-bottom: 8px;">
				<?php echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>"; ?>
				<p><span style="font-size: 2em;">&#8220;</span> Rem ipsum dolor sit, amet consectetur adipisicing elit. Provident animi iure est culpa quia adipisci itaque corporis in impedit.<br> Doloremque debitis maiores accusantium impedit perferendis quisquam adipisci porro exercitationem blanditiis.<span style="font-size: 2em;" > &#8221;</span></p>
				<button type="submit"><a href="home.php" style="color: #fff;">Go Home</a></button>
			</div>
		</div>
	</section>

</body>
</html>