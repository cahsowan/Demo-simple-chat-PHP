<?php
if ($_POST && ! empty($_POST['user'])) {
	header('Location: talk.php?user=' . $_POST['user']);
}
?>

<html>
	<head>
		<title>Let's Talk</title>
	</head>
	<body>
		<h1>Let's Talk</h1>

		<form action="" method="POST">
			<input type="text" name="user" placeholder="your name">
			<input type="submit" value="Start">
		</form>
	</body>
</html>