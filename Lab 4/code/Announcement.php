<?php
require "composer1/vendor/autoload.php";
if (!isset($_POST["email"], $_POST["category"], $_POST["header"], $_POST["description"]))
    redirecting();
$email = $_POST["email"];
$category = $_POST["category"];
$header = $_POST["header"];
$description = $_POST["description"];

$client = new Google_Client();
$client->setAuthConfig("credentials.json");
$client->addScope('https://www/googleapis.com/auth/spreadsheets');
$sheet = new Google_Service_Sheets($client);

$sheetId = "14BhgeUPNCKfwgyM6f9Qihdi4ONcYIEHVhUC_pluOY0Y";
$sheetName = "Announcements";
$content = [[$header, $category, $description, $email]];

$body = new Google_Service_Sheets_ValueRange(['values'=>$content]);
$parameters = array('valueInputOption'=>'USER_ENTERED');

$sheet->spreadsheets_values->append($sheetId, $sheetName, $body, $parameters);
redirecting();

function redirecting(): void {
    header("location: index.php");
    exit();
}