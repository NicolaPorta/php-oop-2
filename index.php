<?php 
    require_once __DIR__ . "/classes/Smartphone.php";
    require_once __DIR__ . "/classes/Notebook.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Shop</title>
    </head>
    <body>
        <h1>Prodotti</h1>
        <ul>
            <li class="cards">
                <?php  $smartphone1 = new Smartphone("Pixel 4XL", "Google", 610, true, "Android", "Snapdragon 855", 6.3 ); ?>
                <h2>
                    <?php echo $smartphone1->name; ?>
                </h2>
                <h3>
                    <?php echo $smartphone1->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $smartphone1->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $smartphone1->shipping_cost; ?>
                </span>
                <span>
                    Insurance: <?php echo $smartphone1->insurance; ?>
                </span>
            </li>
            <li class="cards">
                <?php  $smartphone1 = new Smartphone("IPhone 11 Pro", "Apple", 1150, true, "IoS", "A13 Bionic", 5.8 ); ?>
                <h2>
                    <?php echo $smartphone1->name; ?>
                </h2>
                <h3>
                    <?php echo $smartphone1->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $smartphone1->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $smartphone1->shipping_cost; ?>
                </span>
                <span>
                    Insurance: <?php echo $smartphone1->insurance; ?>
                </span>
            </li>
            <li class="cards">
                <?php  $smartphone1 = new Smartphone("MI 10", "Xiaomi", 521.90, false, "Android", "Snapdragon 865", 6.3 ); ?>
                <h2>
                    <?php echo $smartphone1->name; ?>
                </h2>
                <h3>
                    <?php echo $smartphone1->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $smartphone1->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $smartphone1->shipping_cost; ?>
                </span>
                <span>
                    Insurance: <?php echo $smartphone1->insurance; ?>
                </span>
            </li>
            <li class="cards">
               <?php  $notebook = new Notebook("Latitude 5500","Dell", 909, false, "Windows 10", 16, 15.6); ?>
                <h2>
                    <?php echo $notebook->name; ?>
                </h2>
                <h3>
                    <?php echo $notebook->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $notebook->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $notebook->shipping_cost; ?>
                </span>
                <span>
                    Present: <?php echo $notebook->getPresent(); ?>
                </span>
            </li>
            <li>
            <?php  $notebook = new Notebook("Latitude 5300","Dell", 879, true, "Ubuntu 20.04", 16, 15.6); ?>
                <h2>
                    <?php echo $notebook->name; ?>
                </h2>
                <h3>
                    <?php echo $notebook->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $notebook->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $notebook->shipping_cost; ?>
                </span>
                <span>
                    Present: <?php echo $notebook->getPresent(); ?>
                </span>
            </li>
            <li>
            <?php  $notebook = new Notebook("Macbook Air M1","Apple", 999, true, "MacOs ", 16, 13); ?>
                <h2>
                    <?php echo $notebook->name; ?>
                </h2>
                <h3>
                    <?php echo $notebook->brand; ?>
                </h3>
                <span>
                    Price: <strong><?php echo $notebook->price; ?> €</strong>
                </span>
                <span>
                    Shipping-cost: <?php echo $notebook->shipping_cost; ?>
                </span>
                <span>
                    Present: <?php echo $notebook->getPresent(); ?>
                </span>
            </li>
        </ul>
    </body>
</html>