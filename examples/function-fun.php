<?php

/**
 * Function Fun
 */

$your_variable = "Something";
$returned_variable = NULL;

$returned_variable = your_function($your_variable);
echo $returned_variable;

/**
 * Comment your code! Explain what the function does.
 */
function your_function($your_variable) {
	$greeting = "Here's a sentence containing ". $your_variable;
	return $greeting;
}

?>
