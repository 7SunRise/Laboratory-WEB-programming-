<?php
session_start();
if (false === isset($_SESSION["surname"], $_SESSION["name"], $_SESSION["age"]))
    echo "Мы  не знаем, что именно, но что-то пошло не так";
else
    echo $_SESSION["surname"], " ", $_SESSION["name"], " ", $_SESSION["age"];