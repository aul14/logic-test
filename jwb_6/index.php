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
    $jumlah = "";
    for ($i = 10; $i <= 30; $i++) {
        if (($i % 2) == 0) {
            echo $i . " Bilangan genap<br>";

            $jumlah +=  $i;
        }
    }

    echo "Jumlah bilangan genap lebih dari 10 dan kurang dari 30 adalah <strong>" . $jumlah . "</strong>"
    ?>

</body>

</html>