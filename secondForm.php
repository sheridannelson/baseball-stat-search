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
	table {
		float: left;
	}
	table, tr, td{
		border: 0px;
		padding-left: 25px;
		padding-right: 25px;
		text-align: center;
		cellspacing: 10px;
		margin-top: 15px;
		margin-left: 190px;
	}
	tr td{
		border: 1px solid black;
		padding-left: 30px;
		padding-right: 30px;
	}
	th {
		text-align: center;
	}
	.container {

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

	$fname1 = $_POST['fname1'];
	$lname1 = $_POST['lname1'];
	$fname2 = $_POST['fname2'];
	$lname2 = $_POST['lname2'];
	//echo $fname1 . ' ' . $lname1;

	$array = array("SELECT * FROM CareerStats WHERE 1=1");
	if($fname1!='' & $lname1 !='') {
		array_push($array, "CareerStats.nameFirst LIKE '%{$fname1}%'");
		array_push($array, "CareerStats.nameLast LIKE '%{$lname1}%'");
	}
	if(!$fname1 | !$fname2 | !$lname1 | !$lname2) {
		echo "You have to actually put all of the names in.";
		mysql_close($connect);
	}
	$array = implode(" AND ", $array);

	$results = $connect->query($array);
	if($results->num_rows != 0) {
		echo "<table border=1>";
		while($rows = $results->fetch_assoc()) {
			$fname1 = $rows['nameFirst'];
			$lname1 = $rows['nameLast'];
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

			echo "<tr><td> <b> Player Name </b> </td> <td><b> $fname1 $lname1 </b> </td> </tr> <tr> <td> Games </td> <td> $careergames </td> </tr> <tr> <td> At Bats </td> <td> $careeratBats </td> </tr> <tr> <td> Singles </td> <td> $careersingles </td> </tr> <tr> <td> Doubles </td> <td> $careerdoubles </td> </tr> <tr> <td> Triples </td> <td> $careertriples </td> </tr> <tr> <td> Home Runs </td> <td> $careerhomeruns </td> </tr> <tr> <td> Runs </td> <td> $careerruns </td> </tr> <tr> <td> Strike Outs </td> <td> $careerstrikeOuts </td> </tr> <tr> <td> Walks </td> <td> $careerwalks </td> </tr> <tr> <td> RBIs </td> <td> $careerrbis </td></tr>";
		}
		echo "</table>";
	}

	else {
		echo "No matches found for Player 1";
	}
	//PLAYER 2 BELOW

	$array2 = array("SELECT * FROM CareerStats WHERE 1=1");
	if($fname2!='' & $lname2 != '') {
		array_push($array2, "CareerStats.nameFirst LIKE '%{$fname2}%'");
		array_push($array2, "CareerStats.nameLast LIKE '%{$lname2}%'");
	}
	$array2 = implode(" AND ", $array2);
	$results2 = $connect->query($array2);
	if($results2->num_rows != 0) {
		echo "<table border=1>";
		while($rows = $results2->fetch_assoc()) {
			$fname2 = $rows['nameFirst'];
			$lname2 = $rows['nameLast'];
			$careergames2 = $rows['careerGames'];
			$careeratBats2 = $rows['careerAtBats'];
			$careersingles2 = $rows['careerSingles'];
			$careerdoubles2 = $rows['careerDoubles'];
			$careertriples2 = $rows['careerTriples'];
			$careerhomeruns2 = $rows['careerHomeRuns'];
			$careerruns2 = $rows['careerRuns'];
			$careerstrikeOuts2 = $rows['careerStrikeOuts'];
			$careerwalks2 = $rows['careerWalks'];
			$careerrbis2 = $rows['careerRBIs'];

			echo "<tr> <td> <b> Player Name </b> </td> <td><b> $fname2 $lname2 </b> </td> </tr> <tr> <td> Games </td> <td> $careergames2 </td> </tr> <tr> <td> At Bats </td> <td> $careeratBats2 </td> </tr> <tr> <td> Singles </td> <td> $careersingles2 </td> </tr> <tr> <td> Doubles </td> <td> $careerdoubles2 </td> </tr> <tr> <td> Triples </td> <td> $careertriples2 </td> </tr> <tr> <td> Home Runs </td> <td> $careerhomeruns2 </td> </tr> <tr> <td> Runs </td> <td> $careerruns2 </td> </tr> <tr> <td> Strike Outs </td> <td> $careerstrikeOuts2 </td> </tr> <tr> <td> Walks </td> <td> $careerwalks2 </td> </tr> <tr> <td> RBIs </td> <td> $careerrbis2 </td></tr> </table>";
		}
	}
	else {
		echo "No matches found for Player 2";
	}
?>

</body>

</html>
<?php mysql_close($connect);?>