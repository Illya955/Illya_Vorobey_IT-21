// https://illya.page.gd/?i=1 //
<?php

$languages = [
    "uk" => "uk_UA.UTF-8",
    "en" => "en_US.UTF-8",
    "de" => "de_DE.UTF-8",
    "fr" => "fr_FR.UTF-8"
];


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $lang = $_POST["lang"];

    setcookie("language", $lang, time() + (7 * 24 * 60 * 60));

} else {


    $lang = $_COOKIE["language"] ?? "en";
}

setlocale(LC_TIME, $languages[$lang]);


$date = strftime("%A, %d %B %Y %H:%M:%S");


$ip = $_SERVER["REMOTE_ADDR"];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Language Date Time</title>
</head>

<body>

<h2>Select Language</h2>

<form method="POST">

    <select name="lang">

        <option value="uk">Ukrainian</option>
        <option value="en">English</option>
        <option value="de">German</option>
        <option value="fr">French</option>

    </select>

    <button type="submit">Save</button>

</form>

<h3>Current Date and Time:</h3>

<p><?= $date ?></p>

<h3>Your IP:</h3>

<p><?= $ip ?></p>

</body>
</html>