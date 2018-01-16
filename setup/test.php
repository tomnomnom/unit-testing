<?php
require __DIR__.'/func.php';
require __DIR__.'/filegen.php';

$f = new FileGen();

assert(sumLines($f->fixture(range(1, 8))) == 36);
assert(sumLines($f->fixture([20, 20]))    == 40);
assert(sumLines($f->fixture([2.2, 2.2]))  == 4);
assert(sumLines($f->fixture([]))          == 0);
assert(sumLines("not a file!")            == false);

$f->cleanup();


