<?php

function backToHome() {
    header("Location: /");
    exit(); }

if (false === isset($_POST["email"], $_POST["category"], $_POST["title"], $_POST["description"])) {
    backToHome(); }

$email = $_POST["email"];
$category = $_POST["category"];
$title = $_POST["title"];
$description = $_POST["description"];

$mysqli = new mysqli("localhost", "root", "helloworld", "web");

$mysqli->query('INSERT INTO ad (category, email, title, description) VALUES ($category, $email, $title, $description)');
backToHome();

?>;