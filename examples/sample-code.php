<?php

/**
 * About Me!
 */

// This is also a comment.
$name = "Diana Montalion Dupuis";
$drinks_beer = FALSE;
$num_pets = 2;

$curr_books = array("Sutton", "Wild", "Why Be Happy When You Could Be Normal?");

$not_working = TRUE;

if ($not_working == TRUE) {
  echo '<h1>' . "I am reading:" . '</h1>';
  echo '<ul>';

  foreach ($curr_books as $book) {
    echo '<li>' . $book . '</li>';
  }
  
  echo '</ul>';

} else {
	echo "IÕm writing PHP code.";
}

?>
