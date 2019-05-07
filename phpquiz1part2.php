<?php
include("data.php");
?> 

<!DOCTYPE html>
<html>
<head>
	<title><?= $title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
		.w3-bar-block .w3-bar-item {padding:20px}
	</style>
</head>
<body>
	<!-- Sidebar (hidden by default) -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()"
		class="w3-bar-item w3-button">Close Menu</a>
		<a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
	</nav>

	<!-- Top menu -->
	<div class="w3-top">
		<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
			<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
			<div class="w3-center w3-padding-16">My Food</div>
		</div>
	</div>
		
	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
		<!-- Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center" id="food">
			<div class="w3-quarter">
				<img src="<?= $food[0]["image"];?>" <?= $food[0]["alt"]?>  style="width:100%">
				<h3><?= $food[0]["title"];?></h3>
				<p><?= $food[0]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[1]["image"];?>" alt="<?= $food[1]["alt"]?>" style="width:100%">
				<h3><?= $food[1]["title"];?></h3>
				<p><?= $food[1]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[2]["image"];?>" alt="<?= $food[2]["alt"]?>" style="width:100%">
				<h3><?= $food[2]["title"];?></h3>
				<p><?= $food[2]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[3]["image"];?>" alt="<?= $food[3]["alt"]?>" style="width:100%">
				<h3><?= $food[3]["title"];?></h3>
				<p><?= $food[3]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[4]["image"];?>" <?= $food[4]["alt"]?>  style="width:100%">
				<h3><?= $food[4]["title"];?></h3>
				<p><?= $food[4]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[5]["image"];?>" alt="<?= $food[5]["alt"]?>" style="width:100%">
				<h3><?= $food[5]["title"];?></h3>
				<p><?= $food[5]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[6]["image"];?>" alt="<?= $food[6]["alt"]?>" style="width:100%">
				<h3><?= $food[6]["title"];?></h3>
				<p><?= $food[6]["desc"];?></p>
			</div>
			<div class="w3-quarter">
				<img src="<?= $food[7]["image"];?>" alt="<?= $food[7]["alt"]?>" style="width:100%">
				<h3><?= $food[7]["title"];?></h3>
				<p><?= $food[7]["desc"];?></p>
			</div>
		</div>

		<hr id="about">

		<!-- About Section -->
		<div class="w3-container w3-padding-32 w3-center">	
			<h3>About Me, The Food Man</h3><br>
			<img src="https://www.w3schools.com/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
			<div class="w3-padding-32">
				<h4><b>I am Who I Am!</b></h4>
				<h6><i>With Passion For Real, Good Food</i></h6>
				<p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
			</div>
		</div>
		<hr>

		<!-- Footer -->
		<footer class="w3-row-padding w3-padding-32">
			<div class="w3-third">
				<h3>ABOUT ME</h3>
				<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
			</div>
		
			<div class="w3-third">
				<h3>SOCIAL LINKS</h3>
				<a href="#">Facebook</a><br>
				<a href="#">Twitter</a><br>
				<a href="#">Instagram</a><br>
				<a href="#">GitHub</a><br>
			</div>

			<div class="w3-third w3-serif">
				<h3>POPULAR TAGS</h3>
				<p>
					<span class="w3-tag w3-black w3-margin-bottom"><?= $tags[0];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[1];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[2];?></span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[3];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[4];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[5];?></span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[6];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[7];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[8];?></span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[9];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[10];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[11];?></span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[12];?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tags[13];?></span>
				</p>
			</div>
		</footer>
	<!-- End page content -->
	</div>

	<script>
		// Script to open and close sidebar
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
		}
		 
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
		}
	</script>
</body>
</html>