<?php
session_start();?>
<body>
    <form method = "post">
        <label>Фамилия: </label>
        <input type = "text" name = "surname">

        <label>Имя: </label>
        <input type = "text" name = "name">

        <label>Возраст: </label>
        <input type = "text" name = "age">

        <p><input type = "submit" value = "Отправить данные для задания <<b>> "></p>

        <label for = "name1">Имя: </label>
        <input type = "text" name = "name1">

        <label for = "age1">Возраст: </label>
        <input type = "text" name = "age1">

        <label for = "salary">Зарплата: </label>
        <input type = "text" name = "salary">

        <label for = "placeOfResidence">Место проживания: </label>
        <input type = "text" name = "placeOfResidence">

        <p><input type = "submit" value = "Отправить данные для задания <<c>> "></p>
    </form>

    <?php
    if (true === isset($_POST["surname"], $_POST["name"], $_POST["age"])) {
        $_SESSION["surname"] = $_POST["surname"];
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["age"] = $_POST["age"];
    }
    if (true === isset($_POST["name1"], $_POST["age1"], $_POST["salary"], $_POST["placeOfResidence"]))
        $_SESSION["employee"] = [$_POST["name1"], $_POST["age1"], $_POST["salary"], $_POST["placeOfResidence"]];
    ?>
    <p><a href = "index1.php">Перейти на следующую страницу (!!! для части "b")</a></p>
    <p><a href = "index2.php">Перейти на следующую страницу (!!! для части "c")</a></p>
</body>
