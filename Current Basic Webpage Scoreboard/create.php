

<?php 





if ($_SERVER['REQUEST_METHOD'] == 'POST'){



	$name = $_POST['user_ID'] ?? '';

	$answer = $_POST['flag'] ?? '';

		

	$db = mysqli_connect("localhost", "webuser", "webuser123", "pentest");

	if (!$db) {

		die("Connection failed: " . mysqli_connect_error());

	}

	else {

	

		if ($db->query("SELECT $answer FROM pentesting")){

			$sql = "select $answer from pentesting WHERE user_id='$name'";

			$check = $db->query($sql);

			while ($row = mysqli_fetch_array($check))

				if ($row[0] == 0){

					$update = $db->query("update final set $answer=1 where user_id='$name'");

					$update_2 = $db->query("update final set Total=Total+1 where user_id='$name'");

					header("Location: new.php");

				} else {

					header("Location: error1.php");

				}

		}

		else{

			header("Location: error.php");

		}

		}

}

else {

	header("Location: index.php");

	exit;

}

?>