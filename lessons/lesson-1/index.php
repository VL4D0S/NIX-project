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
                    echo "{$num1} × {$num2} = {$res}</br>";
                }

                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
