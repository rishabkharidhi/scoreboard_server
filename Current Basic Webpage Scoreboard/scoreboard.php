<!doctype html>


<html lang="en">
  <head>
    <title>Welcome to the Pentesting Class</title>
    <meta charset="utf-8">
	<link rel="stylesheet" media="all" href="style.css"/>
	<style>
	table, th, td {
		border: 1px solid black;
	}
	</style>
  </head>

  <body>
		<header>
			<h1> Welcome to Pentesting Class</h1>
		</header>
		<navigation>
			<ul>
				<li><a href = "index.php">Main Page</a></li>
			</ul>
		</navigation>
		<div id="content">
			<table style="width:100%">
			  <tr>
				<th>Name</th>
				<th>Score</th>
			  </tr>
			  <?php
			  $db = mysqli_connect("localhost", "webuser", "password", "pentest");
			  $query = "SELECT * FROM final";
				$result = mysqli_query($db, $query);	
					while ($row = $result->fetch_assoc()) {
						#echo $row['user_id']; echo $row['Total'];
						echo "\t<tr align=center><td>".$row['user_id']."</td><td>".($row['Total']*100)."</td>";
					}
				
			  
			  ?>
			</table>
			
			
		</div>
		<footer>
			&copy; <?php echo date('Y'); ?> Pentesting Class
		</footer>
	
  </body>
</html>
