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
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">SM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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
            $_SESSION['user'] = $loginUser;
        } else {
            //invalid
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password!")';
            echo '</script>';
            header('location: login.php');
        }
    } else {
		header('locations: login.php');
	}
    mysqli_close($conn);
?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teamSearch.php">Search</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="account.php"><?php echo $_SESSION['login_user']; ?></a>
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
                <img src="../Assets/favorites.jpg" alt="Favorites" class="img-thumbnail rounded">
                <h5><?php echo $_SESSION['login_user']; ?></h5>
                <h5>Favorite team: Cowboys</h5>
                <a href="accountSettings.php"><button class="btn btn-sm btn-dark">Edit Account</button></a>
                <br><br>
            </div>
            <h1 align="right">Favorited Players</h1>
            <table class="table">
                <thread class="thread-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Height(CM)</th>
                    <th>Weight(KG)</th>
                    <th>College</th>
                    <th>Day of Birth</th>
                    <th>Current Team</th>
                </tr>
                <?php
                    $user = $_SESSION['login_user'];
                    $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");
                    $sql = "SELECT * FROM wmabry2.players NATURAL JOIN wmabry2.favoriteplayers WHERE username='$user'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['position']; ?></td>
                                <td><?php echo $row['heightCM']; ?></td>
                                <td><?php echo $row['weightKG']; ?></td>
                                <td><?php echo $row['college']; ?></td>
                                <td><?php echo $row['DoB']; ?></td>
                                <td><?php echo $row['teamname']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    else {
                        ?>
                        <tr>
                            <th colspan="2">No Favorites Set!</th>
                        </tr>
                        <?php
                    }
                    mysqli_close($conn);
                    ?>
                </thread>
            </table>
            <h1 align="right">Favorited Teams</h1>
            <table class="table">
                <thread class="thread-dark">
                <tr>
                    <th>Team Name</th>
                    <th>City</th>
                    <th>Founded</th>
                    <th>Conference</th>
                    <th>Division</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>Ties</th>
                    <th>Rushing Yards</th>
                    <th>Passing Yards</th>
                    <th>Recieving Yards</th>
                </tr>
                <?php
                    $user = $_SESSION['login_user'];
                    $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");
                    $sql = "SELECT * FROM wmabry2.teams NATURAL JOIN wmabry2.favoriteteams WHERE username='$user'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['teamname']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['founded']; ?></td>
                                <td><?php echo $row['conference']; ?></td>
                                <td><?php echo $row['division']; ?></td>
                                <td><?php echo $row['wins']; ?></td>
                                <td><?php echo $row['losses']; ?></td>
                                <td><?php echo $row['ties']; ?></td>
                                <td><?php echo $row['rushingyards']; ?></td>
                                <td><?php echo $row['passingyards']; ?></td>
                                <td><?php echo $row['recievingyards']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    else {
                        ?>
                        <tr>
                            <th colspan="2">No Favorites Set!</th>
                        </tr>
                        <?php
                    }
                    mysqli_close($conn);
                    ?>
                </thread>
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
