<?php include 'database.php'; ?>
<?php
	
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
	<html>
		<head>
				<title>Chat-Box</title>
				<link rel="stylesheet" href="css/style.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
				<script src="js/script.js"></script>
		</head>
	<body>
		<div id="container">
			<header>
				<h1>The Chatbox</h1>
			</header>
			<div id="shouts">
				<ul>
					<?php while($row =mysqli_fetch_assoc($shouts)) : ?>
					<li><?php echo $row['name']; ?> : <?php echo $row['shout']; ?> : [<?php echo $row['date']; ?>] </li>
				<?php endwhile ?>
				</ul>
			</div>
			<footer>
				<form>
					<label>Name: </label>
					<input type="text" id="name">
					<label>Greeting</label>
					<input type="text" id="shout">
					<input type="submit" id="submit" value="SHOUT!">
				</form>
			</footer>
		</div>
	</body>
</html>

