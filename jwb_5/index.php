<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        $x = 0;

        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $x++;
            }
        }
        if ($x == 2) {
            echo $i . " ini adalah bilangan prima<br>";
        } else {
            echo $i . " ini bukan bilangan prima<br>";
        }
    }
    ?>

</body>

</html>