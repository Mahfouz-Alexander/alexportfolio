
<?php
function addition($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}


function add(int $num1, int $num2): int {
    return $num1 + $num2;
}

$num1 = 20;
$num2 = 10;

echo "First number: " . $num1 . "<br>";
echo "Second number: " . $num2 . "<br>";

echo "Addition: " . addition($num1, $num2) . "<br>";
echo "Subtraction: " . subtraction($num1, $num2) . "<br>";
echo "Add function: " . add($num1, $num2);

?>
