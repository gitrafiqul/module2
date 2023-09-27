<?php
function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersWithDoWhileLoop(1, 20, 2);
echo "\n";


?>

