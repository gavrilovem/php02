<?php
include dirname(__DIR__) . '/services/Autoload.php';
spl_autoload_register([(new App\services\Autoload), 'loadClass']);
$db = new App\services\DB();
$user = new App\models\User($db);

//$user->save([
//    'id' => '25',
//    'login' => 'login',
//    'password' => 'password'
//]);

//$user->save([
//    'login' => 'login1',
//    'password' => 'password1'
//]);

//var_dump($user->getOne([
//    'id' => '53'
//]));

//var_dump($user->getAll());

//var_dump($user->delete([
//    'id' => '26'
//]));