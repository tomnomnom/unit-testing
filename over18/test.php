<?php
function isOver18($dob, $now = null){
    return $dob <= strtotime("18 years ago", $now);
}

$tests = [
    '2000-01-01' => true,
    '1899-01-01' => true,
    '2002-01-01' => false,
];

$now = strtotime("2018-01-15");

foreach ($tests as $input => $expected){
    $actual = isOver18(strtotime($input), $now);
    assert(
        $actual == $expected,
        "Expected '{$expected}', got '{$actual}' for input '{$input}'"
    );
}

