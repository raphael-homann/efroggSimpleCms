<?php
/**
 * Created by PhpStorm.
 * User: raph
 * Date: 30/08/16
 * Time: 06:03
 */
namespace efrogg\Simplecms\Migrations;

use efrogg\Db\Migration\Migration;

class Migration001 extends Migration {

    public function up()
    {
        echo "up 001";

        $this -> table("cms_page")
        -> create("CREATE TABLE cms_page (
            id_page INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
            label VARCHAR(255) NOT NULL,
            active TINYINT DEFAULT 0 NOT NULL
        ) ENGINE=INNODB ");


        // TODO: Implement up() method.
    }

    public function down()
    {
        $this -> table("cms_page") -> delete();
        // TODO: Implement down() method.
        echo "down 001";
    }
}