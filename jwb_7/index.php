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
    function celciusToFarenheit($angka)
    {
        return $angka * 1.8 + 32;
    }

    echo "Hasil dari conversi 25 derajat celcius ke farenheit adalah <strong>" . celciusToFarenheit(25) . "</strong>"
    ?>

</body>

</html>