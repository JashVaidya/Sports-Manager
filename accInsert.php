<?php 
        ExtendedAddslash($_POST);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");

        $username = mysqli_real_escape_string($conn,$_POST['user']);
        $password = sha1(mysqli_real_escape_string($conn,$_POST['pass']));
      

        /**
         * Check db connection 
         */
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL :" . mysqli_conect_error();
        }
        else {
          echo "Connection was OK!\n";
        }

        $result = mysqli_query($conn,"INSERT into wmabry2.users (username, password) VALUES 
        							('$username', '$password')");

        //$result = mysqli_query($conn,"INSERT into wmabry2.users (username, password)
        //                             SELECT DISTINCT username
        //                              FROM wmabry2.users u
        //                              WHERE 
        //                               NOT EXISTS (SELECT username FROM wmabry2.users users
        //                                           WHERE u.username = users.username");
        mysqli_close($conn);
?>