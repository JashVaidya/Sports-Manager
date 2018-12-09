<?php 
        //ExtendedAddslash($_POST);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $conn = mysqli_connect("localhost","wmabry2","Williamowns1","wmabry2");

	

        $username = $_POST['username'];
        $password = sha1($_POST['password']);
      

        /**
         * Check db connection 
         */
        if (mysqli_connect_errno()) {
            //echo "Failed to connect to MySQL :" . mysqli_conect_error();
        }
        else {
          	//echo "Connection was OK!\n";
        }

        $result = mysqli_query($conn,"INSERT into wmabry2.users (username, password) VALUES 
        							('$username', '$password')");

	 	/**
         * Checks to see if the query failed to insert the new user into the database and 
         * if it does fail echo that the username already exists and to choose a different one
         * Possibly exchange this echo statement for a javascript alert() statement then
         * redirect back to the createAccount.php
         */
        if (!$result) {
                echo "Account already exists! Please choose a different username.";  
        }
		else {
				session_start();
                //alert it was succsessful? 
                header('location: login.php');
		}

        mysqli_close($conn);
?>
