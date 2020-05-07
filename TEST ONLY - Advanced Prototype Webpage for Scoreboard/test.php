<?php

$db = mysqli_connect("localhost", "penuser", "password", "/tmp/mysql.sock");
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully!";

?>