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
					<li> <a href="http://localhost:8888/practice/index.php"> Search by Stats </a> </li>
					<li> <a href="http://localhost:8888/practice/playerSearch.php"> Compare </a> </li>
				</ul>
			
		</div>
	</nav>
		
	<div class="container">

		<h1> A Whole New Ballgame</h1>

<?php
	$connect = mysqli_connect('localhost', 'root', 'root');
	$db = mysqli_select_db($connect, 'Capstone');
	
	$gamesOption = $_POST['gamesOption'];
	$atbatOption = $_POST['atbatOption'];
	$singlesOption = $_POST['singleOption'];
	$doublesOption = $_POST['doubleOption'];
	$tripleOption = $_POST['tripleOption'];
	$homerunOption = $_POST['homerunOption'];
	$walksOption = $_POST['bbOption'];
	$strikeoutOption = $_POST['soOption'];
	$rbiOption = $_POST['rbiOption'];
	$runsOption = $_POST['runsOption'];
	
	$games = $_POST['games'];
	$singles = $_POST['singles'];
	$doubles = $_POST['doubles'];
	$triples = $_POST['triples'];
	$atbats = $_POST['atbats'];
	$walks = $_POST['walks'];
	$homeruns = $_POST['homeruns'];
	$strikeouts = $_POST['strikeouts'];
	$rbis = $_POST['rbis'];
	$runs = $_POST['runs'];

//user defined constraints
	//$query = "SELECT * FROM CareerStats ";
	$array = array("SELECT * FROM CareerStats WHERE 1=1");
	if($games != '') {
		if($gamesOption == "More Than") { //more than
			array_push($array, "CareerStats.careerGames > $games"); //<--this works
		}
		elseif($gamesOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerGames < $games"); 
		}
		elseif($gamesOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerGames = $games");
		}
	}
	if($atbats != '') {
		if($atbatOption == "More Than") { //more than
			array_push($array, "CareerStats.careerAtBats > $atbats"); 
		}
		elseif($atbatOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerAtBats < $atbats"); 
		}
		elseif($atbatOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerAtBats = $atbats"); 
		}
	}
	if($singles != '') {
		if($singlesOption == "More Than") { //more than
			array_push($array, "CareerStats.careerSingles > $singles"); 
		}
		elseif($singlesOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerSingles < $singles"); 
		}
		elseif($singlesOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerSingles = $singles"); 
		}
	}
	if($doubles != '') {
		if($doublesOption == "More Than") { //more than
			array_push($array, "CareerStats.careerDoubles > $doubles"); 
		}
		elseif($doublesOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerDoubles < $doubles"); 
		}
		elseif($doublesOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerDoubles = $doubles"); 
		}
	}
	if($triples != '') {
		if($tripleOption == "More Than") { //more than
			array_push($array, "CareerStats.careerTriples > $triples"); 
		}
		elseif($tripleOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerTriples < $triples"); 
		}
		elseif($tripleOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerTriples = $triples"); 
		}
	}
	if($homeruns != '') {
		if($homerunOption == "More Than") { //more than
			array_push($array, "CareerStats.careerHomeRuns > $homeruns"); 
		}
		elseif($homerunOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerHomeRuns < $homeruns"); 
		}
		elseif($homerunOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerHomeRuns = $homeruns"); 
		}
	}
	if($walks != '') {
		if($walksOption == "More Than") { //more than
			array_push($array, "CareerStats.careerWalks > $walks"); 
		}
		elseif($walksOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerWalks < $walks"); 
		}
		elseif($walksOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerWalks = $walks"); 
		}
	}
	if($strikeouts != '') {
		if($strikeoutOption == "More Than") { //more than
			array_push($array, "CareerStats.careerStrikeOuts > $strikeouts"); 
		}
		elseif($strikeoutOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerStrikeOuts < $strikeouts"); 
		}
		elseif($strikeoutOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerStrikeOuts = $strikeouts"); 
		}
	}
	if($runs != '') {
		if($runsOption == "More Than") { //more than
			array_push($array, "CareerStats.careerRuns > $runs"); 
		}
		elseif($runsOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerRuns < $runs"); 
		}
		elseif($runsOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerRuns = $runs"); 
		}
	}
	if($rbis != '') {
		if($rbiOption == "More Than") { //more than
			array_push($array, "CareerStats.careerRBIs > $rbis"); 
		}
		elseif($rbiOption == "Less Than") { //less than
			array_push($array, "CareerStats.careerRBIs < $rbis"); 
		}
		elseif($rbiOption == "Exactly") { //exactly
			array_push($array, "CareerStats.careerRBIs = $rbis"); 
		}
	}
	$array = implode(" AND ", $array);

//end of user defined constraints
	
	$results = $connect->query($array);
	
	if($results->num_rows != 0) {
		echo "<table border=1><thead> <tr> <th> Player Name </th> <th> Games </th> <th> At Bats </th> <th> Singles </th> <th> Doubles </th> <th> Triples </th> <th> Home Runs </th> <th> Runs </th> <th> Strike Outs </th> <th> Walks </th> <th> RBIs </th> </tr> </thead>";
		while($rows = $results->fetch_assoc()) {
			$fname = $rows['nameFirst'];
			$lname = $rows['nameLast'];
			$careergames = $rows['careerGames'];
			$careeratBats = $rows['careerAtBats'];
			$careersingles = $rows['careerSingles'];
			$careerdoubles = $rows['careerDoubles'];
			$careertriples = $rows['careerTriples'];
			$careerhomeruns = $rows['careerHomeRuns'];
			$careerruns = $rows['careerRuns'];
			$careerstrikeOuts = $rows['careerStrikeOuts'];
			$careerwalks = $rows['careerWalks'];
			$careerrbis = $rows['careerRBIs'];
			echo "<tr> <td> $fname $lname </td> <td> $careergames </td> <td> $careeratBats </td> <td> $careersingles </td> <td> $careerdoubles </td> <td> $careertriples </td> <td> $careerhomeruns </td> <td> $careerruns </td> <td> $careerstrikeOuts </td> <td> $careerwalks </td> <td> $careerrbis </td></tr>";
		}
		echo "</table>";
	} //if statement close bracket */
	else {
		echo "No players fit that criteria. Please try again.";
	}
	

?>

</body>

</html>
<?php mysql_close($connect);?>