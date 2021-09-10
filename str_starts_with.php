<?php

/**
 * @file
 * Showcases PHP 8.0 str_starts_with functions.
 */

// DCATL
// DC
// ATL
// DCATL_SPACE_
// _SPACE_DCATL
// DCATL is
// DCATL  is
// "" (Empty String)
// " "

if (str_starts_with('DCATL is awesome', 'DCATL')) {
    echo 'Line ' . __LINE__ . ': ' . "Jackpot! \n" ;
}
else {
    echo 'Line ' . __LINE__ . ': ' . "Better Luck Next Time! \n" ;
}
