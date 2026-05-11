<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;

    setcookie("user_email", $email, time() + (7 * 24 * 60 * 60));

    header("Location: profile.php");
    exit();
}
?>

<h2>Registration</h2>

<form method="POST">

    Name:<br>
    <input type="text" name="name" required>
    <br><br>

    Email:<br>
    <input type="email" name="email" required>
    <br><br>

    Password:<br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">Register</button>

</form>