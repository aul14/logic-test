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
    function fibonacci($jumlah_bilangan)
    {
        $bilangan_fibonacci = [];

        if ($jumlah_bilangan < 0) {
            return $bilangan_fibonacci;
        }

        for ($i = 0; $i < $jumlah_bilangan; $i++) {
            if ($i < 2) {
                $bilangan = $i;
            } else {
                $bilangan = $bilangan_fibonacci[$i - 1] + $bilangan_fibonacci[$i - 2];
            }

            array_push($bilangan_fibonacci, $bilangan);
        }

        return $bilangan_fibonacci;
    }

    echo implode(" ", fibonacci(10)) . '<br>';
    ?>

</body>

</html>