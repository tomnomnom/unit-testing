<?php
require __DIR__.'/func.php';

// Using the numbers.txt file feels 'magic'
// Write some code to make and use a temp file instead
assert(sumLines("./numbers.txt") == 36);

// Add tests for:
//     * Non readable file
//     * Empty file
//     * File with floats in it
