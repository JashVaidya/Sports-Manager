<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Account</title>
	<?php
		if(isset($_SESSION['user'])){
			$loggedIn = true;
			if($_SESSION['role'] == 1){
				$admin = true;
			} else {
				$admin = false;
			}
		} else {
			//Redirects to login if not logged in
			header("location:login.php");	
		}
	?>
</head>

<body>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");

    //get input
    $loginUser = mysqli_real_escape_string($conn, $_POST['loginUser']);
    $loginPass = sha1(mysqli_real_escape_string($conn, $_POST['loginPass']));

    //query input
    $sql = "SELECT username FROM users WHERE username = '$loginUser' AND password = '$loginPass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    //count row result which should be = 1 if sucsessful login
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        session_register("loginUser");
        //set the users login as the session logged in user for future pages
        $_SESSION['login_user'] = $loginUser;
    } else {
        //invalid
        echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password!")';
        echo '</script>';
        header('location: login.php');
    }
}
mysqli_close($conn);
?>




<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">SM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="teamSearch.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php">Jash</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="account.php">Account Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Sign Out</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col .text-center">
                </br></br>
                <img src="../Assets/UpdateJash.jpg" alt="Picture of Jash" class="img-thumbnail rounded">
                <h5>jvaidya</h5>
                <h5>Favorite team: Cowboys</h5>
                <a href="accountSettings.php">
                    <button class="btn btn-sm btn-dark">Edit Account</button>
                </a>
                <form class="form-signin">
                    <label for="inputUserName" class="sr-only">Edit Username</label>
                    <input type="text" id="inputUserName" class="form-control" placeholder="Edit Username" required=""
                           autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Edit Password"
                           required="">
                    <label for="inputFavTeam" class="sr-only">Edit Favorite Team</label>
                    <input style="margin-top: -10px; align-content: center;" type="text" id="inputFavTeam"
                           class="form-control" placeholder="Edit Favorite Team" required=""
                           autofocus="">
                    <label for="inputBirthday" class="sr-only">Birthday</label>
                    <input style="margin-top: -10px; align-content: center;" type="date" id="inputBirthday"
                           class="form-control" placeholder="Birthday" required=""
                           autofocus="">
                    <label class="radio-inline"><input type="radio" name="gender"> Male</label>
                    <label class="radio-inline"><input type="radio" name="gender"> Female</label>
                    <label class="radio-inline"><input type="radio" name="gender"> Other</label>

                    <button class="btn btn-md btn-dark btn-block" type="submit">Submit Changes</button>
                </form>
            </div>

        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <span class="text-muted">Team Contact Info Here</span>
    </div>
</footer>
</body>

</html>