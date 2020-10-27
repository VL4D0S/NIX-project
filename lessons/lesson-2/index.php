<?php 
error_reporting(E_ALL);

require('/lessons/functions.php');
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

        $colors = ['red' => 1, 'green' => 2, 'yellow' => 3, 'blue' => 4];

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

                        [$color1Index0, $color1Index1] = colorSearch($num1, $colors);
                    } else {
                        $colorNum1 = colorSearch($num1, $colors);
                    }

                    if ($num2 > 9) {

                        [$color2Index0, $color2Index1] = colorSearch($num2, $colors);
                    } else {
                        $colorNum2 = colorSearch($num2, $colors);
                    }

                    if ($res > 9) {

                        [$colorResIndex0, $colorResIndex1] = colorSearch($res, $colors);
                    } else {
                        $colorRes = colorSearch($res, $colors);
                    }

                    echo "<span style='color:{$colorNum1}'>{$num1}</span> × <span style='color:{$colorNum2}'>{$num2}</span> = 
                    <span style='color:{$colorRes}'>{$res}</span></br>";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
