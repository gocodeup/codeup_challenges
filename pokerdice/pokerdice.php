<?php

// function to take user input on STDIN
// performing stringtoupper if $upper is true
function getInput($upper = false) {
	$input = trim(fgets(STDIN));
    return $upper ? strtoupper($input) : $input;
}

// generate an array of 5 dice
// each die should have a random roll between 1 and 6
// sort the dice before returning
function rollDice() {
	$dice = [];
	// todo
	return $dice;
}

// show the dice array
// output should be in the format...
// Dice: 1 2 3 4 5
function showDice($dice) {
	// todo
}

// determine the type of roll, the base score, and the bonus
// for a given array of dice
function scoreRoll($dice) {

	// generate a result in the following data structure
	$result = ['type' => '', 'base_score' => 0, 'bonus' => 0];

	// base score is a sum of all dice

	// hand type and bonus point system
	// five of a kind = 100
	// four of a kind = 75
	// a full house = 50
	// a straight = 40
	// three of a kind = 25
	// two pair = 15
	// a pair = 5
	// nada = 0

	// todo

	// return the result
	return $result;
}

// add an entry to the history log to keep track
// of how many rolls there have been of a given type
// sort history with highest occurring type first
function logHistory(&$history, $type) {
	// todo
}

// display stats from history log based on number of rolls
// desired display format:
// >> STATS ------------
// a pair: 47.47 %
// two pair: 23.67 %
// three of a kind: 15.43 %
// a straight: 7.42 %
// a full house: 3.77 %
// four of a kind: 2.24 %
// << STATS -------------
function showStats($history, $totalRolls) {
	echo ">> STATS ------------\n";
	// todo
	echo "<< STATS -------------\n";
}

// track the total score
$score = 0;

// track the total rolls
$rolls = 0;

// track the roll type history
$history = [];

// welcome the user
echo "Welcome to Poker Dice!\n";
echo "Press enter to get started with your first roll...\n";

$input = getInput(true);

while ($input != 'Q') {

	// roll the dice
	// todo

	// score the result
	// todo: use scoreRoll function

	// add the current roll to the total score
	// todo

	// log the roll type history
	// todo: use logHistory function

	// show the dice
	// todo: use showDice function

	// display roll type, base score, and bonus
	// ex: You rolled a straight for a base score of 20 and a bonus of 40.
	// todo
	
	// display total score
	// ex: Total Score: 32306, in 849 rolls.
	// todo

	// show roll type statistics
	// todo: use showStats function

	// prompt use to roll again or quit
	echo "Press enter to roll again, or Q to quit.\n";
	$input = getInput(true);
}

?>