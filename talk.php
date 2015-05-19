<?php
if (! isset($_GET['user']) or empty($_GET['user'])) {
	header('Location: index.php');
}
?>
<html>
	<head>
		<title>Talking Together</title>
		<style>
		#chat {
			width: 500px;
			height: 200px;
			border: solid 1px #ccc;
			overflow: scroll;
		}
		</style>
	</head>
	<body>
		<h1>Talking Together</h1>
		<div id="chat"></div>
		<br>
		<form action="proses.php">
			<input type="text" name="message">
			<input type="hidden" name="user" value="<?php echo $_GET['user'] ?>">
			<button>Send</button>
		</form>
	</body>
	<script src="jquery.js"></script>
	<script src="app.js"></script>
</html>