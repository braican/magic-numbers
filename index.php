<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Sox Magic Number</title>
	<link rel="stylesheet" href="magic-number.css">
</head>
<body>
	<form action="calculate.php">
		<fieldset>
			<legend>Red Sox record</legend>

			<label for="red_sox_wins">Wins</label>
			<input id="red_sox_wins" name="red_sox_wins" type="number">

			<label for="red_sox_losses">Losses</label>
			<input type="number" name="red_sox_losses" id="red_sox_losses">
		</fieldset>

		<fieldset>
			<legend>3rd Place Wild Card Team</legend>

			<label for="chaser_wins">Wins</label>
			<input id="chaser_wins" name="chaser_wins" type="number">

			<label for="chaser_losses">Losses</label>
			<input type="number" name="chaser_losses" id="chaser_losses">
		</fieldset>
		<input type="submit" value="Go">
	</form>
	<div id="output">
		<div class="magic-number">
			<span>Magic Number</span>
			<span class="value"></span>
		</div>

		<div class="games-left">
			<span>Games Left</span>
			<span class="value"></span>
		</div>
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="magic-number.js"></script>
</body>
</html>