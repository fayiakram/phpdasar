<?php
// pengulangan pada array
// for / foreach

$angka = [3, 2, 15, 20, 11, 77, 89];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
        }
    </style>
</head>

<body>
    <!-- dengan for -->
    <!-- <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div><?php echo $angka[$i] ?></div>
        <?php endfor; ?> -->

    <!-- for each -->
    <?php foreach ($angka as $key) { ?>
        <div> <?php echo $key; ?> </div>
    <?php } ?>
</body>

</html>