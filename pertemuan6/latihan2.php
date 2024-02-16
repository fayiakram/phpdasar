<?php
$cars = [
    [
        "Category" => "MPV",
        "Brand Name" => "Toyota",
        "Model Name" => "Kijang Innova Zenix",
        "Color" => "White",
        "Image" => "zenix.png",
    ],
    [
        "Category" => "MPV",
        "Brand Name" => "Toyota",
        "Model Name" => "Alphard",
        "Color" => "White",
        "Image" => "alphard.png"
    ],
    [
        "Category" => "SUV",
        "Brand Name" => "Toyota",
        "Model Name" => "Land Cruiser",
        "Color" => "Gray Metallic",
        "Image" => "landcruiser.png"
    ],
    [
        "Category" => "Commercial",
        "Brand Name" => "Toyota",
        "Model Name" => "Hilux GR Sport",
        "Color" => "Emotional Red",
        "Capacity" => "hilux.png"
    ],
    [
        "Category" => "Electric Vehicle",
        "Brand Name" => "Wuling",
        "Model Name" => "Binguo EV",
        "Color" => "Milk Tea",
        "Image" => "bingo.png"
    ],
    [
        "Category" => "Electric Vehicle",
        "Brand Name" => "Wuling",
        "Model Name" => "Air EV",
        "Color" => "White",
        "Image" => "airev.png"
    ],
    [
        "Category" => "MPV",
        "Brand Name" => "Honda",
        "Model Name" => "HRV",
        "Color" => "Ignite Red Metallic",
        "Image" => "hrv.png"
    ],
    [
        "Category" => "SUV",
        "Brand Name" => "Honda",
        "Model Name" => "CRV",
        "Color" => "Ignite Red Metallic",
        "Image" => "crv.png"
    ],
    [
        "Category" => "Sedan",
        "Brand Name" => "Toyota",
        "Model Name" => "Civic Type R",
        "Color" => "Black",
        "Image" => "civic.png"
    ],
    [
        "Category" => "Hatchback",
        "Brand Name" => "Mazda",
        "Model Name" => "Mazda 3 Hatchback",
        "Color" => "Platinum Quartz Metallic",
        "Image" => "mazda3.png"
    ],


];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Daftar Mobil</h1>

    <?php foreach ($cars as $car) : ?>
        <ul>
            <li>
                <img src="./image/<?php echo $car["Image"] ?>" alt="">
            </li>
            <li>Category : <?php echo $car["Category"]; ?></li>
            <li>Brand Name : <?php echo $car["Brand Name"]; ?></li>
            <li>Model Name : <?php echo $car["Model Name"]; ?></li>
            <li>Color : <?php echo $car["Color"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>