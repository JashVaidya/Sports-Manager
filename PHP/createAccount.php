<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Create Account</title>
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
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="createAccount.php">Create Account</a>
            </li>
        </ul>
    </div>
</nav>

<div id="accountbg" class="jumbotron">
  <div class="glass-signin-join">
 <!--
changed
action="account.php" to "accSuccess.php"
accSuccess inserts the new username and sha1(password)
into the database after making sure its unqiue
 -->
    <form class="form-signin" action="accInsert.php" method="post">
      <input style="margin-top:12%;left:10%;" name="username" type="text" class="form-ui" placeholder="Username">
      <input style="margin-top:36%;left:10%;" name="password" type="password" class="form-ui" placeholder="Password">
      <button style="margin-top:68%;left:10.5%;" class="btn btn-md btn-dark btn-block form-btn" type="submit">Join</button>
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
