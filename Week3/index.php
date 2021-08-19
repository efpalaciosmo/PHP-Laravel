<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object oriented programming</title>
</head>
<body>
    <?php
        include("coche.php");
        $coche = new Coche(4, "blue", "800ml");
    ?>
    <h1><?= $coche->arrancar(); ?></h1>
    <div>
        <p>The last color was: <?= $coche->getColor();?></p><br>
        <?php $coche->setColor("Red")?>
        <p>The new color is: <?= $coche->getColor();?></p><br>
        <?php $moto = new Moto(2, "red", 120, "Yamaha"); ?>
        <p>The model of the new moto is: <?= $moto->getModel(); ?></p>
    </div>
</body>
</html>
