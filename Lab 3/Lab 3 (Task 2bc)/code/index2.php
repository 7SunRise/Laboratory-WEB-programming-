<?php
session_start();
if (true === empty($_SESSION["employee"]))
    echo "Мы  не знаем, что именно, но что-то пошло не так";
else
    echo '<ul><li>'.implode('</li><li>', $_SESSION["employee"]).'</li></ul>';

