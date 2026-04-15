<?php

// 1.
$a = 15;
$b = 8;

if ($a > $b) {
    $max = $a;
    $min = $b;
} else {
    $max = $b;
    $min = $a;
}

echo "Максимум: $max<br>";
echo "Мінімум: $min<br><br>";


// 2. 
$numbers = [10, 20, 30, 40, 50];

$sum = 0;
$count = count($numbers);

foreach ($numbers as $num) {
    $sum += $num;
}

$average = $sum / $count;

echo "Середнє: $average<br><br>";


// 3. 
$students = [
    "Іваненко Іван" => 75,
    "Петренко Петро" => 85,
    "Сидоренко Олена" => 90
];


foreach ($students as $name => $grade) {
    if ($grade > 80) {
        echo "$name — $grade<br>";
    }
}
echo "<br>";


// 4. 
$num = 12;


if ($num % 3 == 0 || $num % 5 == 0) {
    echo "Число $num кратне 3 або 5<br>";
} else {
    echo "Число $num НЕ кратне 3 і не кратне 5<br>";
}
echo "<br>";


// 5. 
for ($i = 1; $i <= 10; $i++) {
    $result = 7 * $i;
    echo "7 x $i = $result<br>";
}

?>