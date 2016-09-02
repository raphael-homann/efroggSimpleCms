# SimpleCms

    $db = new \efrogg\Db\Adapters\Pdo\PdoDbAdapter(new PDO("mysql:dbname=web;host=mysql","root","root"));
    
    $migrator = new \efrogg\Db\Migration\MigrationManager($db);
    $migrator
        ->addMigrationFolder(__DIR__."/src/efrogg/Simplecms/Migrations/","efrogg\\Simplecms\\Migrations\\")
        ->up();
    var_dump($db->execute("show tables")->fetchAll());