<?php
use IT\Programmer;
use IT\Render;
use IT\Tester;
use IT\Manager;
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
        $workerOne = new Programmer('2 years','0 times','Senior','PHP');
        Render::generateItemList($workerOne->getProgrammerInfo());
        $workerTwo = new Tester('3 years','1 time','Beta tester');
        Render::generateItemList($workerTwo->getTesterInfo());
        $workerThree = new Manager('5 years','8 times','finance','3000 eur.');
        Render::generateItemList($workerThree->getManagerInfo());
        Render::generateItemList($workerThree->getSalary());
        ?>
    </body>
</html>
