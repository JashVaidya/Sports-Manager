<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Account</title>
</head>

<body>
<?php




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
            <li class="nav-item active">
                <a class="nav-link" href="account.php">User</a>
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
                <img src="../Assets/jash.jpg" alt="Picture of Jash" class="img-thumbnail rounded">
                <h5>jvaidya</h5>
                <h5>Favorite team: Cowboys</h5>
                <a href="accountSettings.php"><button class="btn btn-sm btn-dark">Edit Account</button></a>
                <br><br>
            </div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Teams</th>
                    <th scope="col">Total Score</th>
                    <th scope="col">Wins</th>
                    <th scope="col">Losses</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Team 1</th>
                    <td>X</td>
                    <td>Y</td>
                    <td>Z</td>
                </tr>
                <tr>
                    <th scope="row">Team 2</th>
                    <td>X</td>
                    <td>Y</td>
                    <td>Z</td>
                </tr>
                <tr>
                    <th scope="row">Team 3</th>
                    <td>X</td>
                    <td>Y</td>
                    <td>Z</td>
                </tr>
                <tr>
                    <th scope="row">. . .</th>
                    <td>. . .</td>
                    <td>. . .</td>
                    <td>. . .</td>
                </tr>
                <tr>
                    <th scope="row">Team N</th>
                    <td>X</td>
                    <td>Y</td>
                    <td>Z</td>
                </tr>
                </tbody>
            </table>
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