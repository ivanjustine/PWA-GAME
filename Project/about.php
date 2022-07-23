<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css"/>

</head>
<body>
	<?php
	 include 'home.php'
	 ?>
	<div class="about">
		<h1>About Us</h1>
	</div>
	<div class="chia">
		<p class="text">Mary Adelene Chia G. Victoria</p>
		<p class="text">BSIT 2B - Group 2</p>
		<p class="text">LSPU - SPCC</p>
	</div>
	<div class="pchia">
		<img src="chia.jpg">
	</div>

	<div class="marg">
		<p class="text">Ann Margarette E. Audije</p>
		<p class="text">BSIT 2B - Group 2</p>
		<p class="text">LSPU - SPCC</p>
	</div>
	<div class="pmarg">
		<img src="marggg.jpg">
	</div>

	<div class="ivan">
		<p class="text">Ivan Justine B. Macaraig</p>
		<p class="text">BSIT 2B - Group 2</p>
		<p class="text">LSPU - SPCC</p>
	</div>
	<div class="pivan">
		<img src="ivannavi.jpg">
	</div>

	<div class="dene">
		<p class="text">Denelyn B. Belen</p>
		<p class="text">BSIT 2B - Group 2</p>
		<p class="text">LSPU - SPCC</p>
	</div>
	<div class="pdene">
		<img src="denee.jpg">
	</div>
	
	<div class="jo">
		<p class="text">Jorina Erica A. Orna</p>
		<p class="text">BSIT 2B - Group 2</p>
		<p class="text">LSPU - SPCC</p>
	</div>
	<div class="pjo">
		<img src="jorina.png">
	</div>

	
	

</body>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</html>