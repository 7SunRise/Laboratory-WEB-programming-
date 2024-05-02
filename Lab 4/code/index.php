<!DOCTYPE html>
<html>
<head>
    <title>Магазин</title>
</head>
<body>
<div>
    <h1>Создай обьявление:</h1>
    <form method="post" action="Announcement.php">

        <label for="email">Электронная почта:</label><br>
        <input type="email" id="email" name="email">

        <label for="category">Категория:</label>
        <select id="category" name="category">
            <option value="DeliciousFood">Вкусная еда</option>
            <option value="FashionClothes">Модная одежда</option>
            <option value="HouseholdAppliances">Бытовые приборы</option>
        </select><br>

        <label for="header">Название товара (заголовок):</label>
        <input id="header" name="header"><br>

        <label for="description">Описание:</label>
        <textarea id="description" name="description"></textarea>

        <input type="submit">
    </form>
</div>
<div>
    <h1>Опубликованные обьявления</h1>
    <table>
        <thead>
            <th>Название товара</th>
            <th>Категория</th>
            <th>Описание</th>
            <th>Электронная почта продавца</th>
        </thead>
        <tbody>
        <?php
        require "composer1/vendor/autoload.php";
        $client = new Google_Client();
        $client->setAuthConfig("credentials.json");
        $client->addScope('https://www/googleapis.com/auth/spreadsheets');
        $sheet = new Google_Service_Sheets($client);
        $sheetId = "14BhgeUPNCKfwgyM6f9Qihdi4ONcYIEHVhUC_pluOY0Y";
        $sheetName = "Announcements";
        $Announcements = $sheet->spreadsheets_values->get($sheetId, $sheetName)->getValues();
        foreach($Announcements as $announcementRow) {
            echo "<tr>";
            foreach ($announcementRow as $cell)
                echo "<td>{$cell}</td>";
            echo "</tr>"; }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>