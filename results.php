<?php
	// get temperature from the user
    $temperature = $_POST['userTemp'];

	// display the result
    $givenTemp = 15;
    if ($temperature < $givenTemp) {
        echo "It's cold today!";
    }
    else {
        echo "It's hot today!";
    }

?>