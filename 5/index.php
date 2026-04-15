<?php

// 1.
$first_name = "павло";
$last_name = "павлович";
$year_of_birth = 777;

$current_year = date("Y");
$age = $current_year - $year_of_birth;

echo "<h3>1.</h3>";
echo "Повне ім'я: $first_name $last_name<br>";
echo "Вік: $age років<br><br>";


// 2. 
$countries = ["Україна", "Польща", "Німеччина", "Франція"];

echo "<h3>2.</h3>";
echo "<ol>";

foreach ($countries as $country) {
    echo "<li>$country</li>";
}

echo "</ol><br>";


// 3. 
$cities = [
    "Київ" => 2900000,
    "Львів" => 720000,
    "Харків" => 1400000,
    "Одеса" => 1000000
];

echo "<h3>3.</h3>";

foreach ($cities as $city => $population) {
    if ($population > 1000000) {
        echo "$city — $population<br>";
    }
}
echo "<br>";


// 4.
echo "<h3>4.</h3>";
$number = 8;


if ($number % 2 == 0) {
    echo "Число $number — Парне<br>";
} else {
    echo "Число $number — Непарне<br>";
}
echo "<br>";


// 5. 
echo "<h3>5.</h3>";

if ($current_year % 4 == 0) {
    echo "Поточний рік ($current_year) — високосний";
} else {
    echo "Поточний рік ($current_year) — не високосний";
}

?>