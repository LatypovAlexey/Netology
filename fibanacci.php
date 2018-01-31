<?php
function aaa($x) {
    $x1 = 1;
    $x2 = 1;
    while (true) {
        if ($x1 > $x) {
            return false;
        }
        if ($x1 == $x) {
            return true;
        }
        $x3 = $x1;
        $x1 += $x2;
        $x2 = $x3;
    }
}

for ($i = 0; $i <= 50000; $i++) {
    if (aaa($i)) {
        echo $i . ';';
    }
}

?>