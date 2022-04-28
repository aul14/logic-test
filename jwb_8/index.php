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
    $data = ['samsung', 'vivo', 'sony', 'oneplus', 'sony', 'nokia'];
    $input = "on";
    $result = array_filter($data, function ($item) use ($input) {
        if (stripos($item, $input) !== false) {
            return true;
        }
        return false;
    });
    print_r(array_values(($result)));
    ?>

</body>

</html>