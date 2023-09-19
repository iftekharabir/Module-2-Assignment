function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

echo "Using for loop: ";
printEvenNumbersFor(1, 20, 2);
echo "<br>";

function printEvenNumbersWhile($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        if ($current % 2 == 0) {
            echo $current . " ";
        }
        $current += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWhile(1, 20, 2);
echo "<br>";

function printEvenNumbersDoWhile($start, $end, $step) {
    $current = $start;
    do {
        if ($current % 2 == 0) {
            echo $current . " ";
        }
        $current += $step;
    } while ($current <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhile(1, 20, 2);
