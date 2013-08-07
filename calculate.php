
<?php
	
	$sox_wins = $_POST['red_sox_wins'];
	$sox_losses = $_POST['red_sox_losses'];
	$chaser_wins = $_POST['chaser_wins'];
	$chaser_losses = $_POST['chaser_losses'];

	$magic_number = 163 - $sox_wins - $chaser_losses;
	$sox_games_left = 162 - $sox_wins - $sox_losses;

	$final_array = array(
		'magic_number' => $magic_number,
		'games_left' =>	$sox_games_left
	);

	echo json_encode($final_array);
?>