<?php

// 1. 
$a = 5;
$b = 10;

echo "Сума: " . ($a + $b) . "<br>";
echo "Різниця: " . ($a - $b) . "<br>";
echo "Добуток: " . ($a * $b) . "<br>";
echo "Ділення: " . ($a / $b);

echo "<hr>";


// 2. 
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

echo "3-й день: " . $days[2] . "<br>";
echo "5-й день: " . $days[4];

echo "<hr>";


// 3. 
$products = [
    "Phone" => 10000,
    "Laptop" => 25000,
    "Tablet" => 15000
];


foreach ($products as $name => $price) {
    echo "$name: $price грн<br>";
}

echo "<hr>";


// 4. 
$day = "Monday";
;

switch ($day) {
    case "Monday":
        echo "Початок робочого тижня";
        break;
    case "Friday":
        echo "Майже вихідні!";
        break;
    case "Saturday":
    case "Sunday":
        echo "Вихідний день";
        break;
    default:
        echo "Звичайний день";
}

echo "<hr>";


// 5.
$x = 15;


if ($x % 2 == 0) {
    echo "Число парне";
} else {
    echo "Число непарне";
}

?>