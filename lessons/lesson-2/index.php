<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lessons/style.css">
    <title>Lesson-1</title>
</head>
<body>
    <a href="/">Главная</a>

    <table border="1">
        <?php

        $colors = [1 => 'red', 2 => 'green', 3 => 'yellow', 4 => 'blue', 'def' => 'black'];

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

                    switch ($num1) {
                        case 1:
                            $colorNum = 1;
                            break;
                        case 2:
                            $colorNum = 2;
                            break;
                        case 3:
                            $colorNum = 3;
                            break;
                        case 4:
                            $colorNum = 4;
                            break;
                        default:
                            $colorNum = 'def';
                            break;
                    }
                    
                    $color = $colors[$colorNum];

                    $res = $num1 * $num2;
                    echo "<span style='color:{$color}'>{$num1} × {$num2} = {$res}<span></br>";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
