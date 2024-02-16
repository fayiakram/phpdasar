<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for ($i = 0; $i < 10; $i++) {
//     # code...
//     echo "hello world! <br>";
// }

// $a = 0;
// while ($a <= 10) {
//     # code...
//     echo "hello world! <br>";

//     $a++;
// }

// $x = 0;
// do {
//     # code...
//     echo "hello wordl! <br>";
//     $x++;
// } while ($x <= 10);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr style="background-color: blue;">
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td> <?php echo "$i, $j"; ?> </td>
                    <?php endfor; ?>
                </tr>
            <?php else : ?>

            <?php endif; ?>
        <?php endfor; ?>

    </table>
</body>

</html>