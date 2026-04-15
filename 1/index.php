<?php

//1. 
$name = "ілля";
$age = "18";
$is_student = "true";

echo "мене звати $name, мені $age років. ";
echo $is_student ? "я студент." : "я не студент.";

//2. 
$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);

echo "сума елементів: $sum";

//3.
$user = [
    "name" => "ілля",
    "email" => "illya@gmail.com",
    "phone" => "+380123456789"
];

echo "<ul>";
echo "<li>ім'я: " . $user["name"]  . "</li>";
echo "<li>email: " . $user["email"] . "</li>";
echo "<li>телефон: " . $user["phone"] . "</li>";
echo "</ul>";

//4.
if ($age > 18) {
   echo "ви повнолітній";
} else { 
   echo "ви неповнолітній";
}


//5.
$grade = 85;

if ($grade >= 90 && $grade <= 100) { 
    echo "відмінно";
} elseif ($grade >= 70) {
    echo "добре";
} elseif ($grade  >= 50) {
    echo "задовільно";
} else {
    echo "незадовільно";
}

?>