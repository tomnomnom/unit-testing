<?php
require __DIR__.'/func.php';

$tests = [
    20  => 0,
    70  => 1,
    94  => 2,
    100 => 5,
];

foreach ($tests as $input => $expected){
    $actual = getWinnings($input);

    assert(
        $actual == $expected,
        "Expected '{$expected}', got '{$actual}' for input '{$input}'"
    );
}
