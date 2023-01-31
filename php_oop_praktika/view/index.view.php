<?php
use TRANSPORT\Transport;
use TRANSPORT\Car;
use TRANSPORT\Motorcycle;
use TRANSPORT\Bike;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
    $itemOne = new Transport('Supra','Toyota');
    $itemOne->setPrice('30000 eur');
    $itemOne->setWeight('1000 kg');
    $itemOne->setTopSpeed('250 km/h');
    $itemOne->setMaxNumberOfPeople('4');
    $itemOne->generateItemList($itemOne->getInfo());
    $itemTwo = new Car('Honda','Civic','Four');
    $itemTwo->generateItemList($itemTwo->getNoOfDoors());
    $itemThree = new Motorcycle('Kawasaki','Z900','Two');
    $itemThree->generateItemList($itemThree->getWheelCount());
    $itemFour = new Bike('Scott','Addict','One Set');
    $itemFour->generateItemList($itemFour->getBikePedals());
    ?>
    </body>
</html>
