<?php

$num_fingers = 6;

// Call the function to count the fingers.
$kill_him = is_six_fingered_man($num_fingers);

// TRUE is implied.
if ($kill_him) {
  echo "Hello.  My name is Inigo Montoya.  You killed my father.  Prepare to die.";
}

/**
 * Returns true if number of fingers is 6.
 */
function is_six_fingered_man($num_fingers) {
  if ($num_fingers == 6) {
    return TRUE;
  } else {
    return FALSE;
  }
}

?>
