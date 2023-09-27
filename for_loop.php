<?php
  function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
    }
}

echo "Using for loop: ";
printEvenNumbersWithForLoop(1, 20, 2);
echo "\n";

?>

