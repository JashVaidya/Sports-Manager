<!DOCTYPE html>
<?php session_start();?>
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
    <form onsubmit="return val()" action="account.php" class="form-signin" method="post">
      <input id="un" style="margin-top:12%;left:10%;" name="loginUser" type="text" class="form-ui" placeholder="Username">
      <input id="pw" style="margin-top:36%;left:10%;" name="loginPass" type="password" class="form-ui" placeholder="Password">
	  <div id="error" style="left:18%;">
		<p id="message"></p>
	  </div>
      <button id="btn" style="margin-top:68%;left:10.5%;" class="btn btn-md btn-dark btn-block form-btn" type="submit">
		Sign in
	  </button>
    </form>
  </div>
</div>
<footer class="footer">
    <div class="container">
        <span class="text-muted">Team Contact Info Here</span>
    </div>
</footer>
</body>

<script>
	function val() {
		let error = document.querySelector('#error');
		let message = document.querySelector('#message');
		let un = document.querySelector('#un');
		let pw = document.querySelector('#pw');
		
		if ((un.value === '' || pw.value === '')) {
			message.innerHTML = 'Fields must contain characters.';
			error.style.visibility = 'visible';
			return false;
		}
		else if (un.value.length > 20 || pw.value.length > 20) {
			message.innerHTML = 'Fields must be less than 20 characters.';
			error.style.visibility = 'visible';
			return false;
		}
		return true;
	}
</script>

</html>
