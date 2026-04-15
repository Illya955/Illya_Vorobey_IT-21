<?php

// 1. 
$users = [
    ["name" => "Іван", "age" => 17, "email" => "ivan@gmail.com"],
    ["name" => "Петро", "age" => 22, "email" => "petro@gmail.com"],
    ["name" => "Олена", "age" => 19, "email" => "olena@gmail.com"],
    ["name" => "Марія", "age" => 16, "email" => "maria@gmail.com"],
    ["name" => "Андрій", "age" => 25, "email" => "andriy@gmail.com"],
    ["name" => "Світлана", "age" => 30, "email" => "svitlana@gmail.com"],
    ["name" => "Юрій", "age" => 18, "email" => "yuriy@gmail.com"],
    ["name" => "Наталія", "age" => 27, "email" => "natalia@gmail.com"],
    ["name" => "Максим", "age" => 15, "email" => "maksym@gmail.com"],
    ["name" => "Дмитро", "age" => 21, "email" => "dmytro@gmail.com"]
];


// 2.
function filterAdults($users) {
    return array_filter($users, function($user) {
        return $user["age"] >= 18;
    });
}


// 3. 
function compareByNameLength($a, $b) {
    return strlen($a["name"]) - strlen($b["name"]);
}


$adultUsers = filterAdults($users);

usort($adultUsers, "compareByNameLength");


//4. 

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Ім'я</th>
        <th>Вік</th>
        <th>Email</th>
      </tr>";

foreach ($adultUsers as $user) {
    echo "<tr>";
    echo "<td>" . $user["name"] . "</td>";
    echo "<td>" . $user["age"] . "</td>";
    echo "<td>" . $user["email"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>