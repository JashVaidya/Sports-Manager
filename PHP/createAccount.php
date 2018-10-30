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

<div class="jumbotron">
    <div class="container">
        <header class="landing">
            <div class="container">
                <div class="landing-text">
                    <form class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
                        <label for="inputUserName" class="sr-only">Email address</label>
                        <input type="text" id="inputUserName" class="form-control" placeholder="Username" required=""
                               autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                               required="">
                        <label for="inputBirthday" class="sr-only">Email address</label>
                        <input style="margin-top: -10px; align-content: center;" type="date" id="inputBirthday" class="form-control" placeholder="Birthday" required=""
                               autofocus="">
                        <label class="radio-inline"><input type="radio" name="gender"> Male</label>
                        <label class="radio-inline"><input type="radio" name="gender"> Female</label>
                        <label class="radio-inline"><input type="radio" name="gender"> Other</label>

                        <button class="btn btn-md btn-dark btn-block" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </header>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Team Contact Info Here</span>
    </div>
</footer>

</body>

</html>