<?php

if ($_POST) {
    $someText = '';
    if (false != isset($_POST['textArea']))
        $someText = $_POST["textArea"];
    echo "Количество символов в данном тексте:", strlen($someText), "<br/>";
    echo "Количество слов в данном тексте:", str_word_count($someText), "<br/>";
}
?>

<form method = "post">
    <textarea rows = "6" name = "textArea"><?php if (isset($_POST['textArea'])) echo $_POST['textArea']; else echo "Simple example of the text";?></textarea>
    <input type = "submit" value="Подсчитать..." />
</form>
