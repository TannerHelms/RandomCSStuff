<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
		<title>Full Stack Tanner H</title>

		<!-- CSS -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
		<link rel="stylesheet" type="text/css" href="css/balls.css">

		<!--  JQuery -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/forms.js"></script>
		<script src="js/fallingsnow_v6.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
		<style>
			body {
				background-image: url(" images/wood1.jpg");
				background-color: blue;
			}
			#snowflakeContainer {
				position: absolute;
				left: 0px;
				top: 0px;
			}

			.snowflake {
				padding-left: 15px;
				font-family: Cambria, Georgia, serif;
				font-size: 14px;
				line-height: 24px;
				position: fixed;
				color: #FFFFFF;
				user-select: none;
				z-index: -1;
			}
			.snowflake:hover {
				cursor: default;
			}
		</style>
	</head>

	<body>

		<div id="snowflakeContainer">
			<p class="snowflake">
				*
			</p>
		</div>

		<div id="fullbody">

			<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
				<button id="hellos" class="w3-bar-item w3-button w3-large" onclick="w3_close()">
					Close &times;
				</button>
				<a href="#" class="w3-bar-item w3-red button">Tech links</a>

				<a href="http://westada.tech/a1/gavinb" class="w3-bar-item w3-button">Gavin B</a>
				<a href="http://westada.tech/a1/jpm" class="w3-bar-item w3-button">Joseph Mu</a>
				<a href="http://westada.tech/a1/zacharys" class="w3-bar-item w3-button">Zachary S</a>

				<a href="http://westada.tech/a1/bryanh" class="w3-bar-item w3-button">Bryan H</a>
				<a href="http://westada.tech/a1/josephm" class="w3-bar-item w3-button">Joseph Mo</a>
				<a href="http://westada.tech/a1/kenisons" class="w3-bar-item w3-button">Kenison S</a>

				<a href="http://westada.tech/a1/chases" class="w3-bar-item w3-button">Chase S</a>
				<a href="http://westada.tech/a1/davidb" class="w3-bar-item w3-button">David B</a>
				<a href="http://westada.tech/a1/connorc" class="w3-bar-item w3-button">Connor C</a>

				<a href="http://westada.tech/a1/peterc" class="w3-bar-item w3-button">Peter C</a>
				<a href="http://westada.tech/a1/andrewh" class="w3-bar-item w3-button">Andrew H</a>

				<a href="http://westada.tech/a1/jamesr" class="w3-bar-item w3-button">James R</a>
				<a href="http://westada.tech/a1/alysec" class="w3-bar-item w3-button">Alyse C</a>
				<a href="http://westada.tech/a1/michaelc" class="w3-bar-item w3-button">Michael C</a>

				<a href="http://westada.tech/a1/heathers" class="w3-bar-item w3-button">Heather S</a>
				<a href="http://westada.tech/a1/briellel" class="w3-bar-item w3-button">Brielle L</a>
				<a href="http://westada.tech/a1/tannerh" class="w3-bar-item w3-button">Tanner H</a>
				<a h

				<a href="#" class="w3-bar-item w3-red button">Net Links</a>

				<a href="http://westada.net/a1/gavinb" class="w3-bar-item w3-button">Gavin B</a>
				<a href="http://westada.net/a1/jpm" class="w3-bar-item w3-button">Joseph Mu</a>
				<a href="http://westada.net/a1/zacharys" class="w3-bar-item w3-button">Zachary S</a>

				<a href="http://westada.net/a1/bryanh" class="w3-bar-item w3-button">Bryan H</a>
				<a href="http://westada.net/a1/josephm" class="w3-bar-item w3-button">Joseph Mo</a>
				<a href="http://westada.net/a1/kenisons" class="w3-bar-item w3-button">Kenison S</a>

				<a href="http://westada.net/a1/chases" class="w3-bar-item w3-button">Chase S</a>
				<a href="http://westada.net/a1/davidb" class="w3-bar-item w3-button">David B</a>
				<a href="http://westada.net/a1/connorc" class="w3-bar-item w3-button">Connor C</a>

				<a href="http://westada.net/a1/peterc" class="w3-bar-item w3-button">Peter C</a>
				<a href="http://westada.net/a1/andrewh" class="w3-bar-item w3-button">Andrew H</a>

				<a href="http://westada.net/a1/jamesr" class="w3-bar-item w3-button">James R</a>
				<a href="http://westada.net/a1/alysec" class="w3-bar-item w3-button">Alyse C</a>
				<a href="http://westada.net/a1/michaelc" class="w3-bar-item w3-button">Michael C</a>

				<a href="http://westada.net/a1/heathers" class="w3-bar-item w3-button">Heather S</a>
				<a href="http://westada.net/a1/briellel" class="w3-bar-item w3-button">Brielle L</a>
				<a href="http://westada.net/a1/tannerh" class="w3-bar-item w3-button">Tanner H</a>
				<a href="http://westada.net/a1/richardm" class="w3-bar-item w3-button">Richard M</a>

				<a href="#" class="w3-bar-item w3-red button">Classroom Links</a>

				<a href="http://192.168.1.102/a1gavinb" class="w3-bar-item w3-button">Gavin B</a>
				<a href="http://192.168.1.103/a1jpm" class="w3-bar-item w3-button">Joseph Mu</a>
				<a href="http://192.168.1.104/a1zacharys" class="w3-bar-item w3-button">Zachary S</a>

				<a href="http://192.168.1.105/a1bryanh" class="w3-bar-item w3-button">Bryan H</a>
				<a href="http://192.168.1.106/a1josephm" class="w3-bar-item w3-button">Joseph Mo</a>
				<a href="http://192.168.1.107/a1kenisons" class="w3-bar-item w3-button">Kenison S</a>

				<a href="http://192.168.1.109/a1chases" class="w3-bar-item w3-button">Chase S</a>
				<a href="http://192.168.1.110/a1davidb" class="w3-bar-item w3-button">David B</a>
				<a href="http://192.168.1.111/a1connorc" class="w3-bar-item w3-button">Connor C</a>

				<a href="http://192.168.1.114/a1peterc" class="w3-bar-item w3-button">Peter C</a>
				<a href="http://192.168.1.115/a1andrewh" class="w3-bar-item w3-button">Andrew H</a>

				<a href="http://192.168.1.117/a1jamesr" class="w3-bar-item w3-button">James R</a>
				<a href="http://192.168.1.118/a1alysec" class="w3-bar-item w3-button">Alyse C</a>
				<a href="http://192.168.1.119/a1hunterf" class="w3-bar-item w3-button">Hunter F</a>
				<a href="http://192.168.1.120/a1michaelc" class="w3-bar-item w3-button">Michael C</a>

				<a href="http://192.168.1.121/a1heathers" class="w3-bar-item w3-button">Heather S</a>
				<a href="http://192.168.1.122/a1briellel" class="w3-bar-item w3-button">Brielle L</a>
				<a href="http://192.168.1.123/a1tannerh" class="w3-bar-item w3-button">Tanner H</a>
				<a href="http://192.168.1.124/a1richardm" class="w3-bar-item w3-button">Richard M</a>

			</div>
			<div>
				<button class="w3-button w3-red w3-xxlarge" onclick="w3_open()">
					&#9776;
				</button>
			</div>
			<div id="gradient">
				<h1 id="topH1">Yeah! We are starting *FULL STACK* !!!</h1>
				<h2>Created by tanner H period A1 </h2>
				<h3>Started 12 January 2017</h3>
			</div>
			<ul>
				<li>
					<a id="showtable" class="active" href="#home"><h5>Table</h5></a>
				</li>
				<li>
					<a id="showpicture" href="#news"><h5>Picture!</h5></a>
				</li>
				<li>
					<a id="formClick" href="#contact"><h5>Form</h5></a>
				</li>
				<li>
					<a id="results1" href="#about"><h5>Results</h5></a>
				</li>

				<li>
					<a id="t" href="tannerh.zip"><h5>Click here to download my code!</h5></a>
				</li>
			</ul>

			<hr>

			<h4 id="a3">... Click on the Nav Bar to open things!!! ...</h4>
			<h5 id="a2" onclick="animationFunction()">... Click to start/stop some cool animation i made! ...</h5>
			<div id="picture11" method="post" ">
			<hr>
			<img id="F14" src="images/F14.jpg" alt="F14">
			</div>
			<br>

			<br>

			<div id="formone">
			<div id="circleball">
			<div class="container">
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			</div>
			</div>
			</div>

			<div id="spin" class="fa fa-spinner w3-spin">

			<img id="spinning" src="images/Colors.png" alt="spinning" />

			</div>

			<div id="spin3">
			<img id="illusion" src="images/bg-transparent.gif" />
			</div>

			<div id="sql_picture" >
			<span onclick="w3_close3()">&times;</span>
			<h4>Important parts of developing a SQL Database</h4>

			<p style="clear: both; text-align: center;">
			<br>
			The first thing to do in SQL is plan out your database, the most common way to do this is by using ERDs, or Entity-Relationship-Diagrams, like the ones below:
			</p>

			<p style="clear: both;">
			<br>
			<img src="images/wood1.jpg" style="float: left;" class="styled"/>
			</p>

			</div>

			<form id="NameEmailForm" action="php/DBaddRecords.php" method="post" >
			<h4 id="a3">First Name: </h4>
			<input type="text" name="firstname">
			<br>
			<h4 id="a3">Last Name: </h4>
			<input type="text" name="lastname">
			<br>
			<h4 id="a3">E-mail: </h4>
			<input type="text" name="email">
			<br>
			<h4 id="a3">Website (Ex: tannerh): </h4>
			<input type="text" name="website">
			<br>
			<h4 id="a3">Comments:</h4>
			<textarea name="comments" rows="10" cols="30"></textarea>
			<br>
			<input type="submit">
			</form>

			<div id="results" method="post" >

			<h3>Show SQL Select Results</h3>
			<h4> <?php
			include "php/DBechoShow.php";
			?>
			</h4>
			</div>
			<div id="tableResults">

			<h1>View Records (Intern Code Project)</h1>

			<div method="post" >
				<h4 id="a3"> <?php
				include 'php/DBRetriveTable.php';
				?> </h4>
				<br>
			</div>

			<hr>
		</div>

		<script>
			function clearForm() {
				document.getElementById("NameEmailForm").reset();
			}
		</script>

		<script>
			function w3_open() {
				document.getElementById("mySidebar").style.display = "block";
			}

			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		</div>
	<script src="js/fallingsnow.js"></script>
	<script src="js/fallingsnow1.js"></script>
	</body>

</html>