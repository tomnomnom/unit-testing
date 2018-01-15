<?php

function getWinnings($r = null){
    if ($r === null){
        $r = rand(1, 100);
    }

    if ($r <= 50) return 0;
    if ($r <= 90) return 1;
    if ($r <= 95) return 2;
    if ($r <= 100) return 5;
}
