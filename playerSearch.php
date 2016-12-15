<!DOCTYPE html>
<html lang="en">

<head>
	<title> A Whole New Ballgame</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Arvo|Chewy|Gloria+Hallelujah|Raleway|Sigmar+One|Oswald|Special+Elite" rel="stylesheet">
<style>
	body {
		background-image: url("https://memberdesq.onesporttechnology.com/assets/uploads/1/documents/baseball-pattern.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	nav {
		background-color: maroon;
		padding-bottom: 0;
	}
	.navbar a {
		color: white;
	}
	.navbar-header > li > a:hover{
		background-color: maroon !important;
	}
	.form-group-row {
		padding-top: 70px;
	}
	.formForUsers {
		padding-top: 20px;
		margin-left: 70px;
	}
	h1 {
		font-family: 'Sigmar One', cursive;
		text-align: center;
		font-size: 50px;
		padding-bottom: 0px;
		letter-spacing: 5px;
		text-shadow: 3px 3px silver;
	}
	h3 {
		font-family: 'Oswald';
		text-align: center;
		padding-top: 0;
	}
	label {
		font-size: 20px;
	}
	footer {
		text-align: center;
		padding-top: 15px;
	}

	table, tr, td{
		border: 0px;
		padding-left: 25px;
		padding-right: 25px;
		text-align: center;
		cellspacing: 10px;
	}
	tr td{
		border: 1px solid black;
		padding-left: 30px;
		padding-right: 30px;
	}
	th {
		text-align: center;
	}
</style>
</head>

<body>
	

	<nav class="navbar navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header"> 
				<a class="navbar-brand" href="http://localhost:8888/practice/index.php">A Whole New Ballgame &nbsp; |</a>
			</div> <!-- end nav title-->
				<ul class="nav navbar-nav">
					<li> <a href="http://localhost:8888/practice/index.php"> Search by Stats</a> </li>
					<li> <a href="http://localhost:8888/practice/playerSearch.php"> Compare </a> </li>
				</ul>
			
		</div>
	</nav>
		
	<div class="container">

		<h1> A Whole New Ballgame</h1>

		<div class="formIndividualPlayer">
		<form name="SecondForm" action ="secondForm.php" method="post">
		<h2> First Player </h2>
			<div class="row"> 
				<label for="fname1" class="col-md-2 col-form-label">First Name</label>
				<div class="col-md-2"> 
					<input type="text" class="form-control" id="fname1" name="fname1"> 
				</div>
				<label for="lname1" class="col-md-2 col-form-label">Last Name</label>
				<div class="col-md-2"> 
					<input type="text" class="form-control" id="lname1" name="lname1"> 
				</div>
			</div>
			<br><br>
			<h2> Second Player </h2>
			<div class="row"> 
				<label for="fname2" class="col-md-2 col-form-label">First Name</label>
				<div class="col-md-2"> 
					<input type="text" class="form-control" id="fname2" name="fname2"> 
				</div>
				<label for="lname2" class="col-md-2 col-form-label">Last Name</label>
				<div class="col-md-2"> 
					<input type="text" class="form-control" id="lname2" name="lname2"> 
				</div>
			</div>
			<div class="col-md-15">
				<input type="submit">
		</div>
		</form>
		</div>
		<br>
		
<?php

?>

</body>

</html>
<?php mysql_close($connection);?>