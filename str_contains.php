<?php

/**
 * @file
 * Showcases PHP 8.0 str_contains functions.
 */

// awesome
// awe
// Awesome
// awesome_SPACE_
// _SPACE_awesome
// is awesome
// is  awesome
// "" (Empty String)
// " "

if (str_contains("DCATL is awesome", "awesome")) {
    echo 'Line ' . __LINE__ . ': ' . "Jackpot! \n" ;
}
else {
    echo 'Line ' . __LINE__ . ': ' . "Better Luck Next Time! \n" ;
}
