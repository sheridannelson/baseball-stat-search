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

		<div class="secondarytext">
			<h3> Ever want to know what players hit more than X home runs but only batted Z times? Well now's your chance! <br> Just type in the variables that you want to know, and click submit. </h3>
		</div>

		<!-- FORM -->
		
		<div class="formForUsers">
		<form name="Form" action ="submitForm.php" method="post">
			<div class="row"> 
				<div class="col-md-2">
					<select class="form-control" name="gamesOption" id="gamesOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="games" name="games"> 
					
				</div>
				<label for="games" class="col-md-2 col-form-label"> Games Played </label>

				<div class="col-md-2">
					<select class="form-control" name="atbatOption" id="atbatOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="atbats" name="atbats"> 
				</div>
				<label for="atbats" class="col-md-2 col-form-label"> At Bats </label>
			</div>
			
			<br>

			<div class="row"> 
				<div class="col-md-2">
					<select class="form-control" name="singleOption" id="singleOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="singles" name="singles"> 
				</div>
				<label for="singles" class="col-md-2 col-form-label"> Singles </label>

				<div class="col-md-2">
					<select class="form-control" name="doubleOption" id="doubleOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="doubles" name="doubles"> 
				</div>
				<label for="doubles" class="col-md-2 col-form-label"> Doubles </label>
			</div>
			
			<br>
			
			<div class="row"> 
				<div class="col-md-2">
					<select class="form-control" name="tripleOption" id="tripleOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="triples" name="triples"> 
				</div>
				<label for="triples" class="col-md-2 col-form-label"> Triples </label>

				<div class="col-md-2">
					<select class="form-control" name="homerunOption" id="homerunOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="homeruns" name="homeruns"> 
				</div>
				<label for="homeruns" class="col-md-2 col-form-label"> Home Runs </label>
			</div>

			<br>

			<div class="row"> 
				<div class="col-md-2">
					<select class="form-control" name="bbOption" id="bbOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="bbs" name="walks"> 
				</div>
				<label for="bbs" class="col-md-2 col-form-label"> Walks </label>

				<div class="col-md-2">
					<select class="form-control" name="soOption" id="soOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="sos" name="strikeouts"> 
				</div>
				<label for="sos" class="col-md-2 col-form-label"> Strike Outs </label>
			</div>

			<br>

			<div class="row"> 
				<div class="col-md-2">
					<select class="form-control" name="rbiOption" id="rbiOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="rbis" name="rbis"> 
				</div>
				<label for="rbis" class="col-md-2 col-form-label"> RBIs </label>

				<div class="col-md-2">
					<select class="form-control" name="runsOption" id="runsOption">
						<option value="Less Than">Less than</option>
						<option value="Exactly">Exactly</option>
						<option value="More Than">More than</option>
					</select>
				</div>
				<div class="col-md-1"> 
					<input type="text" class="form-control" id="runs" name="runs"> 
				</div>
				<label for="runs" class="col-md-2 col-form-label"> Runs Scored </label>
			</div>

			<br>

			<div class="col-md-10">
				<input type="submit">
			</div>
			<?php echo "$errInt"; ?>
		</form>
		</div>


	</div> <!--Container end for whole page below navbar -->



	<!-- Error alerts 
	<div class="alert alert-danger" role="alert">
		<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
		<span class="sr-only">Error:</span> Do not use negative numbers
	</div>
	<div class="alert alert-danger" role="alert">
		<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
		<span class="sr-only">Error:</span> Only numbers allowed (no letters or special characters)
	</div>
	-->

</body>

<footer> Sheridan Nelson, Information Systems, CPSC 445W, Fall 2016</footer>

</html>
<?php mysql_close($connect);?>