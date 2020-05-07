<!doctype html>

<html lang="en">
  <head>
    <title>Welcome to the Pentesting Class</title>
    <meta charset="utf-8">
	<link rel="stylesheet" media="all" href="style.css"/>
  </head>

  <body>
		<header>
			<h1> Welcome to Pentesting Class</h1>
		</header>
		<navigation>
			<ul>
				<li><a href = "scoreboard.php">Score Board</a></li>
			</ul>
		</navigation>
		<div id="content">
			<form action="create.php" method="post">
				<dl>
					<dt>User_ID</dt>
					<dd><input type="text" name="user_ID" /></dd>
				</dl>
				<dl>
					<dt>Flag</dt>
					<dd><input type="text" name="flag"/></dd>
				</dl>
				<div id="operation">
				<input type="submit" value="submit"/>
				
			</div>
			</form>

		</div>
		<footer>
			&copy; <?php echo date('Y'); ?> Pentesting Class
		</footer>
	
  </body>
</html>
