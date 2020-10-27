<?php 
error_reporting(E_ALL);

require $_SERVER['DOCUMENT_ROOT'] . '/lessons/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lessons/style.css">
    <title>Lesson-2</title>
</head>
<body>
    <a href="/">Главная</a>

    <table border="1">
        <?php

        for ($i = 1; $i <= 2; $i++) {
            echo "<tr>";
            $num1 = 1;

            if ($i == 2) {
                $num1 = 6;
            }

            $end = $num1 + 4;

            for ($num1; $num1 <= $end; $num1++) {
                echo "<td>";

                for ($num2 = 1; $num2 <= 10; $num2++) {

                    $res = $num1 * $num2;

                    if ($num1 > 9) {

                        [$color1Index0, $color1Index1] = colorSearch($num1);

                        $num1Str = strval($num1);
                        $num1Index0 = $num1Str[0];
                        $num1Index1 = $num1Str[1];
                    } else {
                        $color1Index0 = colorSearch($num1);
                        $color1Index1 = "black";
                        $num1Index0 = $num1;
                        $num1Index1 = "";
                    }

                    if ($num2 > 9) {

                        [$color2Index0, $color2Index1] = colorSearch($num2);

                        $num2Str = strval($num2);
                        $num2Index0 = $num2Str[0];
                        $num2Index1 = $num2Str[1];
                    } else {
                        $color2Index0 = colorSearch($num2);
                        $color2Index1 = "black";
                        $num2Index0 = $num2;
                        $num2Index1 = "";
                    }

                    if ($res > 9 && $res < 100) {

                        [$colorResIndex0, $colorResIndex1] = colorSearch($res);

                        $resStr = strval($res);
                        $resIndex0 = $resStr[0];
                        $resIndex1 = $resStr[1];
                    } else if ($res >= 100) {
                        [$colorResIndex0, $colorResIndex1, $colorResIndex2] = colorSearch($res);

                        $resStr = strval($res);
                        $resIndex0 = $resStr[0];
                        $resIndex1 = $resStr[1];
                        $resIndex2 = $resStr[2];
                    } else {
                        $colorResIndex0 = colorSearch($res);
                        $colorResIndex1 = "black";
                        $colorResIndex2 = "black";
                        $resIndex0 = $res;
                        $resIndex1 = "";
                        $resIndex2 = "";
                    }

                    echo "<span style='color:{$color1Index0}'>{$num1Index0}</span><span style='color:{$color1Index1}'>{$num1Index1}</span> × 
                    <span style='color:{$color2Index0}'>{$num2Index0}</span><span style='color:{$color2Index1}'>{$num2Index1}</span> = 
                    <span style='color:{$colorResIndex0}'>{$resIndex0}</span><span style='color:{$colorResIndex1}'>{$resIndex1}</span><span style='color:{$colorResIndex2}'>{$resIndex2}</span></br>";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
