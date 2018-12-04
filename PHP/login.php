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

    		header("location: account.php");
    	} else {
    		$error = "Your login name or password was invalid";
    	}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">SM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="createAccount.php">Create Account</a>
            </li>
        </ul>
    </div>
</nav>

<div id="loginbg" class="jumbotron">
  <div class="glass-signin-join">
    <form class="form-signin" action="account.php">
      <input style="margin-top:12%;left:10%;" name="loginUser" type="text" class="form-ui" placeholder="Username">
      <input style="margin-top:36%;left:10%;" name="loginPass" type="password" class="form-ui" placeholder="Password">
      <button style="margin-top:68%;left:10.5%;" class="btn btn-md btn-dark btn-block form-btn" type="submit">Sign in</button>
    </form>
  </div>
</div>
<footer class="footer">
    <div class="container">
        <span class="text-muted">Team Contact Info Here</span>
    </div>
</footer>
</body>

</html>
