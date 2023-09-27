<?php
function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWithWhileLoop(1, 20, 2);
echo "\n";


?>

