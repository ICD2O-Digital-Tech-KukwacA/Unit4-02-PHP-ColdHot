<?php
	// get number from the textfield
    $temperature = $_POST['userTemp'];

	// generate random number
    const $givenTemp = 15;
    if ($temperature < $givenTemp) {
        echo "It's cold today!";
    }
    else {
        echo "It's hot today!";
    }

?>