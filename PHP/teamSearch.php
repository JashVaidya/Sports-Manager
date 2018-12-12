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
		<div class="glass-search team">
		  <form class="form-signin" action="results.php" method="post">
			<input id="team-input" name="teamSearch" type="text" class="form-ui" style="left:6%;text-indent:100px;" 
			placeholder="Team" required="" onKeyDown="erase(this)">
			
			<button class="btn btn-md btn-dark btn-block form-btn" 
			style="margin-top:33%;left:5.5%;" type="submit">Search</button>
		  </form>
		</div>
		<div class="glass-search player">
		  <form class="form-signin" action="results.php" method="post">
			<input id="player-input" type="text" class="form-ui" style="left:6%;text-indent:100px;" 
			placeholder="Player" required="" onKeyDown="erase(this)">
			
			<button class="btn btn-md btn-dark btn-block form-btn" 
			style="margin-top:33%;left:5.5%;" type="submit">Search</button>
		  </form>
		</div>
	</div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Team Contact Info Here</span>
    </div>
</footer>

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

<script>
	function erase(e) {
		if (e.id === 'team-input') {
			document.querySelector('#player-input').value = '';
		}
		else {
			document.querySelector('#team-input').value = '';
		}
	}
</script>
</html>
