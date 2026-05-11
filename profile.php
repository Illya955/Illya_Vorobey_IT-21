<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: register.php");
    exit();
}
?>

<h2>User Profile</h2>

<p>Name: <?= htmlspecialchars($_SESSION["name"]) ?></p>

<p>Email: <?= htmlspecialchars($_SESSION["email"]) ?></p>

<?php if (isset($_COOKIE["user_email"])): ?>

<p>
    Your email was remembered:
    <?= htmlspecialchars($_COOKIE["user_email"]) ?>
</p>

<?php endif; ?>

<a href="logout.php">
    <button>Logout</button>
</a>