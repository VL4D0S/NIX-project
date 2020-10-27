<?php

function colorSearch(int $num, array $colors)
{
    $strNum = strval($num);
    $lenNum = strlen($strNum);

    if ($lenNum === 2) {
        $colorKeyIndex0 = array_search($strNum[0], $colors);
        $colorKeyIndex1 = array_search($strNum[1], $colors);

        $colorIndex0 = $colorKeyIndex0 ?: "black";
        $colorIndex1 = $colorKeyIndex1 ?: "black";

        return [$colorIndex0, $colorIndex1];
    } else {
        $colorKey = array_search($num, $colors);

        return $colorKey ?: "black";
    }
}

/**
 * Функция для переворота строки с поддержкой кириллицы
 * @return string перевёрнутая строка
 * @param string $str строка, которую необходимо перевернуть
 */
function utf8_strrev(string $str): string
{
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}