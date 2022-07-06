<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>

    <div class="container">
		
		<header class="header">
			<a href="home.php" class="logo"><i class="fas fa-code"></i> u c o d e m y</a>

		<form action="" class="search-form">
	        <input type="search" name="" placeholder="search here..." id="searchBox">
	        <label for="searchBox" class="fas fa-search"></label>
	    </form>    
	   
	    <div class="icons">
	        <div class="fas fa-search" id="search-btn"></div>
	        <div class="fas fa-bars" id="menu-btn"></div>
    	</div>
	    
	    <nav class="navbar">
	    	<a href="profile.php">profile</a>
	        <a href="#home">home</a>
	        <a href="courses.php">courses</a>
	        <a href="about.php">about</a>
	        <a href="logout.php" class="btn" style="text-align: center;">Logout</a>
	    </nav>

	    </header>
	
			<div  id="home" class="row">
				<div class="col" data-aos="fade-down">
					<h1>Welcome to <br> ucodemy</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<button type="button"><a href="about.php">Learn More</a></button>
				</div>
				<div class="col" data-aos="fade-up">
					<div class="card card1"></div>
					<div class="card card2"></div>
					<div class="card card3"></div>
					<div class="card card4"></div>	
				</div>
			</div>	
	</div>
