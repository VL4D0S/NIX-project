<?php
require('/lessons/functions.php');

echo "<a href='/lessons/lesson-3/index.php'>Назад</a><br>";

if (isset($_POST['text'])) {
    $text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));
    echo utf8_strrev($text);
}
