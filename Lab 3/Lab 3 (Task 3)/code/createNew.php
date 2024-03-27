<?php
function redirecting(): void {
    header('Location: /');
    exit();
}
if (false === isset($_POST['email'], $_POST['description'], $_POST['title'], $_POST['category']))
    redirecting();
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$pathToFile = "./categories/{$category}/{$email}";
mkdir($pathToFile);
file_put_contents("{$pathToFile}/{$title}.txt", $description);
redirecting();