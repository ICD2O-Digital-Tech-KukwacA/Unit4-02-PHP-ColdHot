<?php
	// get number from the textfield
    $temperature = $_POST['userTemp'];

	// generate random number
    $givenTemp = 15;
    if ($userGuess == $givenTemp) {
        echo "It's hot today!";
    }
    else {
        echo "It's cold today!";
    }

?>