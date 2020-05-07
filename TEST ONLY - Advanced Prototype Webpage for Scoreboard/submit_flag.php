<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$name = $_POST['userid'] ?? '';
	$answer = $_POST['flag'] ?? '';
		
	echo "Name: ".$name;
	
	$db = mysqli_connect("localhost", "root", "password", "pentest");
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
	
		if ($db->query("SELECT $answer FROM final")){
			$sql = "select $answer from final WHERE user_id='$name'";
			$check = $db->query($sql);
			while ($row = mysqli_fetch_array($check))
				if ($row[0] == 0){
					$update = $db->query("update final set $answer=1 where user_id='$name'");
                    $update_2 = $db->query("update final set Total=Total+1 where user_id='$name'");
                    $message = "Flag Submitted!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Location: index.php");
                }
                else {
					$message = "Flag already submitted. Try with another flag.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Location: index.php");
				}
    }
	else{
        $message = "Wrong flag submitted. Try with another flag.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: index.php");
	}
		}
}
else {
	header("Location: index.php");
	exit;
}
?>