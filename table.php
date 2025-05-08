<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table Created</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
		<h1>Table</h1>
	<?php
		$width = $_POST['width'];
		$height = $_POST['height'];
		$count = 1;

		echo "<table>";
		for ($row = 0; $row < $height; $row++) {
			echo "<tr>";
			for ($col = 0; $col < $width; $col++) {
				echo "<td>$count</td>";
				$count++;
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</center>
</body>
</html>
