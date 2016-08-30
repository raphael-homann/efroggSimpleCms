<?php

$autoload = require_once "vendor/autoload.php";

$db = new \efrogg\Db\Adapters\Pdo\PdoDbAdapter(new PDO("mysql:dbname=efroggcms;host=mysql", "root", "root"));

$migrator = new \efrogg\Db\Migration\MigrationManager($db);
$migrator
    ->addMigrationFolder(__DIR__ . "/src/efrogg/Simplecms/Migrations/", "efrogg\\Simplecms\\Migrations\\");


if (isset($_GET["down"])) {
    $migrator
        ->down();
}

if (isset($_GET["up"])) {
    $migrator
        ->up();
}


var_dump($db->execute("show tables")->fetchAll());

