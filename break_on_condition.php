$num1 = 0;
$num2 = 1;
$count = 0;

while ($count < 10) {

    $next = $num1 + $num2;

    if ($next > 100) {
        break;
    }

    echo $next . " ";

    $num1 = $num2;
    $num2 = $next;
    $count++;
}
