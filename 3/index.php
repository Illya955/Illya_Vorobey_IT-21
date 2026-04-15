<?php

// 1. 
$product1 = 200;
$product2 = 150;
$product3 = 250;

$total = $product1 + $product2 + $product3;

echo "$total грн<br><br>";


// 2. 
$movies = ["Inception", "Titanic", "Avatar", "Interstellar", "The Matrix"];

foreach ($movies as $movie) {
    echo $movie . "<br>";
}
echo "<br>";


// 3. 
$user = [
    "login" => "admin",
    "password" => "12345",
    "email" => "admin@gmail.com"
];

echo "Логін: " . $user["login"] . "<br>";
echo "Пароль: " . $user["password"] . "<br>";
echo "Email: " . $user["email"] . "<br><br>";


// 4. 

if ($total > 500) {
    $discount = $total * 0.10;
    $final_price = $total - $discount;

    echo "Знижка: $discount грн<br>";
    echo "Сума зі знижкою: $final_price грн<br>";
} else {
    echo "Знижка не надається<br>";
}
echo "<br>";


// 5. 

$inputLogin = "admin";
$inputPassword = "12345";

$correctLogin = "admin";
$correctPassword = "12345";

if ($inputLogin == $correctLogin && $inputPassword == $correctPassword) {
    echo "Вхід успішний!";
} else {
    echo "Невірний логін або пароль!";
}

?>