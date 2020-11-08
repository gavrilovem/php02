<?php
    include dirname(__DIR__) . '/services/Autoload.php';
    spl_autoload_register([(new App\services\Autoload), 'loadClass']);
    $db = new App\services\DB();
    $user = new App\models\User($db);
    echo $user->getOne(4) . '<br>';

    $good = new App\models\Good($db);
    echo $good->getAll() . '<br>';

    $sale = new App\models\Sale($db);
    echo $sale->getAll() . '<br>';
    echo $sale->execute([
        'product_id' => '1',
        'discount' => '20'
    ]);

