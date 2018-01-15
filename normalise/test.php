<?php
require __DIR__.'/func.php';

$tests = [
    'Tom'   => 'tom',
    'Tom '  => 'tom',
    ' TOM ' => 'tom',
];

foreach ($tests as $input => $expected){
    $actual = normaliseUsername($input);

    assert(
        $actual == $expected,
        "Expected '{$expected}', got '{$actual}' for input {$input}"
    );
}
