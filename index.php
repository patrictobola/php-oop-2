<?php
include __DIR__ . '/data/products_info.php';
include __DIR__ . '/Models/Products.php';
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
                <?php foreach ($products as $prod) :
                    $product = new Products($prod['name'], $prod['price']);
                    var_dump($product)
                ?>
                    <div class="col-4 flex-wrap d-flex">
                        <div class="card w-100">

                            <li class="list-unstyled">
                                <img src="<?= $prod['url'] ?>" alt="">
                                <h3><?= $prod['name'] ?></h3>
                                <span>Prezzo: €<?= $prod['price'] ?></span>
                            </li>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </ul>

</body>

</html>