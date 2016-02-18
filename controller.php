<?php
	$words = array("what", "horse", "donkey", "apple", "coding", "jumping", "smash", "cabinet", "green", "basket", "picnic", "play", "river", "peanut", "comic", "pretzel");
	$symbols = array("!", "@", "#", "$", "%", "^", "&", "*", "?");
	$password = [];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!isset($_POST["words"])|| !is_numeric($_POST["words"]) || $_POST["words"]>9){
			echo("Please input a valid number.");
		}
		elseif (isset($_POST)){
			for($i=0;$i<$_POST["words"]; $i++){
				array_push($password, $words[rand(0,15)]);
			};
			echo "Your Password:";
			for($i=0;$i<count($password);$i++){
				echo($password[$i]);
				if ($i!=count($password)-1){
					echo($_POST["separator"]);
				};
			};
			if(isset($_POST["number"])){
				echo(rand(0,9));
			};
			if(isset($_POST["symbol"])){
				echo($symbols[rand(0,8)]);
			};
		}
	}
	else {
		for($i=0;$i<4;$i++){
			echo($words[rand(0,15)]);
			if ($i!=3){
				echo("-");
			};
		};
	}
?>