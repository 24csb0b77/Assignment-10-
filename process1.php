<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $passport = trim($_POST["passport"]);
    $country = trim($_POST["country"]);

    if (empty($name) || empty($passport) || empty($country)) {
        echo "<p style='color: red; text-align: center;'>All fields are required!</p>";
    } elseif (strlen($passport) < 8 || strlen($passport) > 10) {
        echo "<p style='color: red; text-align: center;'>Invalid passport number!</p>";
    } else {
        echo "<p style='color: green; text-align: center;'>Visa application submitted successfully!</p>";
    }
}
?>
