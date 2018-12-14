<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Welcome</title>
</head>
<body>
<style>
.container-forms {
  width: 1000px;
}
</style>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">SM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php"><?php echo $_SESSION['login_user']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Sign Out</a>
            </li>
        </ul>
    </div> 
</nav>

<div id="homebg" class="jumbotron">

	<div class="container-forms">
		<?php
 $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");
 $team = $_POST['teamSearch'];
 $player = $_POST['playerSearch'];
 if (isset($_POST['teamSub'])) {
		 if ($team == "all") {
			$sql = "SELECT * FROM teams;";
		 } elseif ($player == "all") {
			$sql = "SELECT * FROM teams";
		 } elseif ($team == "") {
			$sql = "SELECT * FROM teams WHERE teamname in (SELECT teamname FROM players WHERE playername = '" . $player . "');";
		 } else {
			$sql = "SELECT * FROM teams WHERE teamname='" . $team . "';";
		 }
		 $result = $conn->query($sql);
		if ($result->num_rows > 0) {
									echo '<div><table class="table table-striped table-dark"><thead><tr><th scope="col">Team Name</th><th scope="col">City</th><th scope="col">Founded</th>'.
									'<th scope="col">Conference</th><th scope="col">Division</th><th scope="col">Wins</th><th scope="col">Losses</th><th scope="col">Ties</th><th scope="col">Rushing Yards</th>'.
									'<th scope="col">Passing Yards</th><th scope="col">Recieving Yards</th></thead><tbody>';
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>" . $row["teamname"]. "</td> <td>" . $row["city"] . "</td><td>" . ($row["founded"]) .  
										"</td><td>" . $row["conference"] .  "</td><td>" . $row["division"] . 
										 "</td><td>" . ($row["wins"]) .  "</td><td>" . ($row["losses"]) .  "</td><td>" . ($row["ties"]) . 
										  "</td><td>" . ($row["rushingyards"]) . " yards</td><td>" . ($row["passingyards"]) . " yards</td><td> " . ($row["recievingyards"])
										  . " yards</td><br>";
									}
									echo "</tbody></table></div>";
								} else {
									echo "<p>No Results to Display.</p>";
								}
 } else {
		 if ($player == "all") {
			$sql = "SELECT * FROM players;";
		 } elseif ($team == "all") {
			$sql = "SELECT * FROM players";
		 } elseif ($player == "") {
			$sql = "SELECT * FROM players WHERE teamname='" . $team . "';";
		 } else {
			$sql = "SELECT * FROM players WHERE playername='" . $player . "';";
		 }
		 $result = $conn->query($sql);
		if ($result->num_rows > 0) {
									echo '<div><table class="table table-striped table-dark"><thead><tr><th scope="col">Player ID</th><th scope="col">First</th><th scope="col">Last</th>'.
									'<th scope="col">Position</th><th scope="col">Height</th><th scope="col">Weight</th><th scope="col">College</th><th scope="col">Date of Birth</th><th scope="col">Team</th>'.
									'</thead><tbody>';
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>" . $row["playerid"]. "</td> <td>" . $row["firstname"] . "</td><td>" . ($row["lastname"]) .  
										"</td><td>" . $row["position"] .  "</td><td>" . $row["heightCM"] . 
										 "</td><td>" . ($row["weightKG"]) .  "</td><td>" . ($row["college"]) .  "</td><td>" . ($row["DoB"]) . 
										  "</td><td>" . ($row["teamname"]) . "</td><br>";
									}
									echo "</tbody></table></div>";
								} else {
									echo "<p>No Results to Display.</p>";
								}
	}
?>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>