<?php
$x = 13;
    $x1 = 1;
    $x2 = 1;
    while (true) {
        if ($x1 > $x) {
            echo 'не входит';
            break;
        }
        if ($x1 == $x) {
            echo 'входит';
            break;
        }
        $x3 = $x1;
        $x1 += $x2;
        $x2 = $x3;
    }

?>