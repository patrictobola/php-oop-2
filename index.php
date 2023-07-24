<?php
include __DIR__ . '/data/products_info.php';
include __DIR__ . '/Models/Products.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Toys.php';
include __DIR__ . '/Models/Accessories.php';


$royal_canin = new Food('Royal Canin Mini Adult', '43,99', 'Dog', $prod_urls[0]['url'], '545g', 'Ham, Rice');
$almo_maintenance = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44,99', 'Dog', $prod_urls[1]['url'], '600g', 'Beef, Cereals');
$almo_cat = new Food('Almo Nature Cat Daily Lattina', '34,99', 'Cat', $prod_urls[2]['url'], '400g', 'Tuna, Chicken, Ham');
$guppy_fish = new Food('Mangime per Pesci Guppy in Fiocchi', '2,95', 'Fish', $prod_urls[3]['url'], '30g', 'Fishes, Cereals, Lietis, Alghes');
$wilma = new Accessories('Voliera Wilma in Legno', '184,99', 'Uccello', $prod_urls[4]['url'], 'Legno', 'L 83 x P 67 x H 153cm');
$filter = new Accessories('Cartucce Filtranti per Filtro EasyCrystal', '2,29', 'Fish', $prod_urls[5]['url'], 'Materiale Espanso', 'ND');
$kong_classic = new Toys('Kong Classic', '13,49', 'Doggo', $prod_urls[6]['url'], 'Galleggia e rimbalza', '8,5cm x 10cm');
$peluche = new Toys('Topini di peluche Trixie', '4,99', 'Catto', $prod_urls[7]['url'], 'Morbido con codina in corda', '8,5cm x 10cm');
$products = [$royal_canin, $almo_maintenance, $almo_cat, $guppy_fish, $wilma, $filter, $kong_classic, $peluche];
var_dump($products)



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="myApp/css/style.css">
    <title>Boolshop</title>
</head>

<body>
    <h1>Boolshop</h1>

    <ul>
        <div class="container">
            <div class="row g-3">
                <?php foreach ($products as $key => $prod) :
                ?>
                    <div class="col-4 flex-wrap d-flex">
                        <div class="card w-100">

                            <li class="list-unstyled">
                                <img src="<?= $prod->img_path ?>" alt="">
                                <h3><?= $prod->name ?></h3>
                                <!-- <span>Prezzo: €<?= $key['price'] ?></span> -->
                            </li>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </ul>

</body>

</html>