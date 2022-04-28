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

    $status = [["Complete"], ["Incomplete", "Complete"], ["Complete", "Incomplete"]];
    $kelengkapan = [["Kwitansi Keseluruhan"], ["Form Claim", "Copy Buku Kehamilan"], ["Rincian Biaya Lab", "Rincian Biaya Obat"]];
    $find = "Complete";
    $result = [];
    foreach ($status as $key => $val) {
        $index = array_search($find, $val);
        $data = $kelengkapan[$key][$index];
        $result[] = [$data];
    }
    echo json_encode($result);
    ?>

</body>

</html>