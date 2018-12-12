<?php

 $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");
 $team = mysqli_escape_string($_POST['teamSearch']);
 $sql = "SELECT * FROM wmabry2.teams WHERE teamname = '$team'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
    }
 }


?>