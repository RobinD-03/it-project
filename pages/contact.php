<?php

	if ($_SERVER["REQUEST_METHOD"] != "POST") {
		// Redirect to another page or display an error message
		header("Location: /path/to/error-page.html");
		exit(); // Ensure that the script stops execution
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/main-style.css">
	<link rel="stylesheet" href="../styles/contact-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <title>WEBDEVS</title>
</head>
<body>
	<div id="overlay"></div>
	<div id="overlay2"></div>
    <header>
		<div id="head-title">WEBDEVS</div>
		<nav class="nav-links" id="main-nav-links">
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../pages/arabic.html">Arabic Blog</a></li>
				<li><a href="../pages/portfolio.html">Portfolio</a></li>
				<li><a href="../pages/schedule.html">Schedule</a></li>
                <li><a href="../pages/quiz.html">Quiz 1</a></li>
				<li><a href="../pages/quiz2.html">Quiz 2</a></li>
                <li><a href="../pages/media.html">Media</a></li>
                <li class="active-page"><a href="../pages/contact.html">Contact Us</a></li>
			</ul>
		</nav>
		<a id="menu-icon" href="javascript:void(0);">
			<span  class="material-symbols-outlined">
				menu
			</span>
		</a>
	</header>
	<div id="hidden-menu" class="ham-menu-closed">
		<nav class="nav-links" id="menu-nav-links">
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../pages/arabic.html">Arabic Blog</a></li>
				<li><a href="../pages/portfolio.html">Portfolio</a></li>
				<li><a href="../pages/schedule.html">Schedule</a></li>
                <li><a href="../pages/quiz.html">Quiz 1</a></li>
				<li><a href="../pages/quiz2.html">Quiz 2</a></li>
                <li><a href="../pages/media.html">Media</a></li>
                <li class="active-page-hidden"><a href="../pages/contact.html">Contact Us</a></li>
			</ul>
		</nav>
	</div>
	<button id="side-button" onclick="toggle_sidebar()"><i class="fa-solid fa-chevron-right"></i></button>
	<div class="sidebar sidebar-close">
		<ul>
			<li id="back-home"><a href="../index.html">Back Home</a></li>
		</ul>
	</div>
	<main>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["mail"];
                $desc = $_POST["desc"];
        
                echo "<h2>Submitted Information:</h2>";
                echo "<p><strong>First Name:</strong> $fname</p>";
                echo "<p><strong>Last Name:</strong> $lname</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Description:</strong> $desc</p>";
                echo "<p><strong>Thank you for contacting us, we will reach out as soon as possible</strong></p>";
            }
        ?>
	</main>

	<footer>
		copyright &copy;2023, All Rights Reserved
	</footer>

	<a id="return-to-top" href="#">
		<span class="material-symbols-outlined">
			arrow_upward
		</span>
	</a>

	<script src="https://kit.fontawesome.com/9c8069e5f8.js" crossorigin="anonymous"></script>
	<script src="../scripts/mainApp.js"></script>
	
</body>
</html>