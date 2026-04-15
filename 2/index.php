<?php

// 1.
function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

    return $password;
}


// 2. 
function isStrongPassword($password) {
    $hasUpper = preg_match('/[A-Z]/', $password);
    $hasNumber = preg_match('/[0-9]/', $password);
    $hasLength = strlen($password) >= 8;

    return $hasUpper && $hasNumber && $hasLength;
}


// 3. 
$passwords = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $count = (int)$_POST["count"];
    $length = (int)$_POST["length"];

    function generateStrongPasswords($count, $length, $callback) {
        $result = [];

        while (count($result) < $count) {
            $pass = generatePassword($length);

            if ($callback($pass)) {
                $result[] = $pass;
            }
        }

        return $result;
    }

    $passwords = generateStrongPasswords($count, $length, "isStrongPassword");
}

?>

 4.
<h2>Генератор безпечних паролів</h2>

<form method="POST">
    
    <input type="number" name="count" min="1" required>
    <br><br>

    <input type="number" name="length" min="6" required>
    <br><br>

    <button type="submit">Згенерувати</button>
</form>

<?php if (!empty($passwords)): ?>

    <h3>Згенеровані безпечні паролі:</h3>

    <ul>
        <?php foreach ($passwords as $p): ?>
            <li><?= $p ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>